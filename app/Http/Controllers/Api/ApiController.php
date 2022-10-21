<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    private $PER_PAGE = 20;

    public function getOperators(Request $request)
    {
        $page = $request->get('page');
        $operators = \DB::table('OPERATORS_LIST')
            ->select('ID_OPERATOR', 'Operator_caption');
        $searchTerm = $request->get('search');
        $searchTerm = 'Lumi'; // Test
        if ($searchTerm) {
            $operators = $operators->where('Operator_caption', 'like', '%' . $searchTerm . '%');
        }
        $operators = $operators->paginate($this->PER_PAGE, null, null, $page);
        return ['operators' => $operators];
    }

    public function getMsn(Request $request)
    {
        $page = $request->get('page');
        $searchTerm = $request->get('search');
        $operator_id = $request->input('data.operator_id');
        $msn = \DB::table('MSN_LIST as ml')
            ->select('ID_MSN', 'MSN_Description')
            ->join('ABL_DEALS as ad', 'ml.ID_MSN', '=', 'ad.MSN_ID')
            ->where('LESSEE_OPERATOR_ID', $operator_id);
        if ($searchTerm) {
            $msn = $msn->where('MSN_Description', 'like', '%' . $searchTerm . '%');
        }
        $msn = $msn->paginate($this->PER_PAGE, null, null, $page);

        return ['msn' => $msn];
    }

    public function getData(Request $request, $stepNumber)
    {
        $actionName = "step$stepNumber";
        return $this->$actionName($request);
    }

    public function step1(Request $request)
    {
        $msn_id = $request->get('msn_id');
        $msn_id = 3;
        $data = \DB::table('ABL_DEALS as ad')
            ->join('MSN_LIST as ml', 'ml.ID_MSN', '=', 'ad.MSN_ID')
            ->join('OPERATORS_LIST as ol', 'ol.ID_OPERATOR', '=', 'ad.LESSEE_OPERATOR_ID')
            ->join('AIRCRAFT_VARIANT as av', 'av.Aircraft_ID', '=', 'ad.ID_AIRCRAFTVARIANT')
            ->join('APU as ap', 'ap.ID_APU', '=', 'ad.APU_ID')
            ->join('ENGINE_MODEL as em', 'em.ID_ENGINE_MODEL', '=', 'ad.ID_ENGINMODEL')
            ->join('ENGINE_SERIES as es', 'es.ID_ENGINE_SERIES', '=', 'em.ID_ENGINE_SERIES')
//            ->join('LM_UTILIZATION_New as lm', 'lm.ID_ABLDEALS', '=', 'ad.ID_ABL_DEALS')
            ->where('ml.ID_MSN', $msn_id)
            ->select([
                'ad.AIRCRAFTREGISTRATION_NUMBER',
                'av.AIRCRAFTVARIANT_CAPTION',
                'em.MODEL_CAPTION',
                'ap.Model',
                'ad.MANUFACTUREDATE',
                'ad.AIRCRAFT_OWNER',
                'ad.LEASESTART',
                'ad.LEASEEND',
                'ad.ESN1_ID',
                'ad.ESN2_ID',
                'ad.ESN3_ID',
                'ad.ESN4_ID',
                'ad.APU_SN',
                'ad.NOSE_LDG_SN',
                'ad.MAIN_LDG_LH1_SN',
                'ad.MAIN_LDG_RH1_SN',
                'ad.MAIN_LDG_LH2_SN',
                'ad.MAIN_LDG_RH2_SN',
                'ad.MAIN_LDG_LH3_SN',
                'ad.MAIN_LDG_RH3_SN',
                'ad.CreatedBy',
//                'ad.CreationDate',
                \DB::raw('CONVERT(DATE, ad.CreationDate) as CreationDate'),
                'ad.ModifiedBy',
//                'ad.ModificationDate',
                \DB::raw('CONVERT(DATE, ad.ModificationDate) as ModificationDate')
            ])
            ->distinct()
            ->get();
        return ['data' => $data];
    }
    
    public function step2(Request $request)
    {
        $operator_id = $request->input('operator_id');
        $msn_id = $request->get('msn_id');
        $data = \DB::table('LM_UTILIZATION_New as lm')
                ->join('ABL_DEALS as ad', 'ad.ID_ABL_DEALS', '=', 'lm.ID_ABLDEALS')
                ->join('MSN_LIST as ml', 'ml.ID_MSN', '=', 'ad.MSN_ID')
                ->join('OPERATORS_LIST as ol', 'ol.ID_OPERATOR', '=', 'ad.LESSEE_OPERATOR_ID')
            ->select([
                'Data_Source_Airframe',
                'ID_ABLDEALS',
                'Data_Source_Airframe',
                'Engine_1_Location',
                'Engine_2_Location',
                'Engine_3_Location',
                'Engine_4_Location',
                'Utilization_Start_date_Airframe',
                'Utilization_End_date_Airframe',
                'Last_Utilization_date_Airframe',
                'Monthly_Airframe_Utilization_FH',
                'Monthly_Airframe_Utilization_FC',
                'Airframe_TSN_at_Latest_Utilization_date',
                'Airframe_CSN_at_Latest_Utilization_date',
                'APU_Location',
                'Data_Source_APU',
                'Utilization_Start_date_APU',
                'Utilization_End_date_APU',
                'Last_Utilization_date_APU',
                'Monthly_APU_Utilization_APU_H',
                'Monthly_APU_Utilization_APU_C',
                'APU_TSN_at_Latest_Utilization_date',
                'APU_CSN_at_Latest_Utilization_date',
                'lm.CreatedBy',
                'lm.CreationDate',
                'lm.ModifiedBy',
                'lm.ModificationDate',
            ])
            ->where('ml.ID_MSN', $msn_id)
            ->where('LESSEE_OPERATOR_ID', $operator_id)
            ->distinct()
            ->first();

        return ['data' => $data];
    }

    public function getUsers(Request $request)
    {
        $page = $request->get('page');
        $users = \DB::table('users')
            ->select(['ID_USER', 'USER_NAME', 'USER_EMAIL']);

        $searchTerm = $request->get('search');
        if ($searchTerm) {
            $users = $users->where('USER_NAME', 'like', '%' . $searchTerm . '%');
        }
        $users = $users->paginate($this->PER_PAGE, null, null, $page);
        return ['users' => $users];
    }

    public function update(Request $request)
    {
        $step = $request->get('step');
        $actionName = "update_$step";
        return $this->$actionName($request);
    }

    public function update_step1(Request $request)
    {
        return ["payload" => $request->all()];
    }

    public function update_step2(Request $request)
    {
        return ["payload" => $request->all()];
    }

}
