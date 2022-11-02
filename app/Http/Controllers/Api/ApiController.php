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

    public function getData(Request $request)
    {
        $msn_id = $request->get('msn_id');
        $general = [
            'lmd.Utilization_End_Date_Airframe',
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
            \DB::raw('CONVERT(DATE, ad.ModificationDate) as ModificationDate'),
        ];
        $af_apu = [
            'lmd.Data_Source_Airframe',
            'lmd.Utilization_Start_date_Airframe',
            'lmd.Utilization_End_date_Airframe',
            'lmd.Last_Utilization_date_Airframe',
            'lmd.Monthly_Airframe_Utilization_FH',
            'lmd.Monthly_Airframe_Utilization_FC',
            'lmd.Airframe_TSN_at_Latest_Utilization_date',
            'lmd.Airframe_CSN_at_Latest_Utilization_date',
//                'lmd.IS_APU_UTILIZATION_CALCULATED_FROM_AIRFRAME',
//                'lmd.MULTIPLICATION_FACTOR_AIRFRAME_FH/APU_H',
//                'lmd.MULTIPLICATION_FACTOR_APU_H/APU_CY',
            'lmd.APU_Location',
            'lmd.Data_Source_APU',
            'lmd.Utilization_Start_date_APU',
            'lmd.Utilization_End_date_APU',
            'lmd.Last_Utilization_date_APU',
            'lmd.Monthly_APU_Utilization_APU_H',
            'lmd.Monthly_APU_Utilization_APU_C',
            'lmd.APU_TSN_at_Latest_Utilization_date',
            'lmd.APU_CSN_at_Latest_Utilization_date',
        ];
        $engines = [
            'lmd.engine_1_notes',
            'lmd.data_source_engine_1',
            'lmd.utilization_start_date_engine_1',
            'lmd.utilization_end_date_engine_1',
            'lmd.last_utilization_date_engine_1',
            'lmd.engine_1_location',
            'lmd.monthly_engine_1_utilization_fh',
            'lmd.monthly_engine_1_utilization_fc',
            'lmd.engine_1_tsn_at_latest_utilization_date',
            'lmd.engine_1_csn_at_latest_utilization_date',
            'engine_2_notes',
            'data_source_engine_2',
            'utilization_start_date_engine_2',
            'utilization_end_date_engine_2',
            'last_utilization_date_engine_2',
            'engine_2_location',
            'monthly_engine_2_utilization_fh',
            'monthly_engine_2_utilization_fc',
            'engine_2_tsn_at_latest_utilization_date',
            'engine_2_csn_at_latest_utilization_date',
            'engine_3_notes',
            'data_source_engine_3',
            'utilization_start_date_engine_3',
            'utilization_end_date_engine_3',
            'last_utilization_date_engine_3',
            'engine_3_location',
            'monthly_engine_3_utilization_fh',
            'monthly_engine_3_utilization_fc',
            'engine_3_tsn_at_latest_utilization_date',
            'engine_3_csn_at_latest_utilization_date',
            'engine_4_notes',
            'data_source_engine_4',
            'utilization_start_date_engine_4',
            'utilization_end_date_engine_4',
            'last_utilization_date_engine_4',
            'engine_4_location',
            'monthly_engine_4_utilization_fh',
            'monthly_engine_4_utilization_fc',
            'engine_4_tsn_at_latest_utilization_date',
            'engine_4_csn_at_latest_utilization_date',
        ];
        $ldg = [
            'NOSE_LDG_NOTES',
            'DATA_SOURCE_NOSE_LDG',
            'UTILIZATION_START_DATE_NOSE_LDG',
            'UTILIZATION_END_DATE_NOSE_LDG',
            'LAST_UTILIZATION_DATE_NOSE_LDG',
            'NOSE_LDG_LOCATION',
            'MONTHLY_NOSE_LDG_UTILIZATION_FH',
            'MONTHLY_NOSE_LDG_UTILIZATION_FC',
            'NOSE_LDG_TSN_AT_LATEST_UTILIZATION_DATE',
            'NOSE_LDG_CSN_AT_LATEST_UTILIZATION_DATE',
            'Main_LDG_LH1_Notes',
            'DATA_SOURCE_MAIN_LDG_LH1',
            'UTILIZATION_START_DATE_MAIN_LDG_LH1',
            'UTILIZATION_END_DATE_MAIN_LDG_LH1',
            'LAST_UTILIZATION_DATE_MAIN_LDG_LH1',
            'MAIN_LDG_LH1_LOCATION',
            'MONTHLY_MAIN_LDG_LH1_UTILIZATION_FH',
            'MONTHLY_MAIN_LDG_LH1_UTILIZATION_FC',
            'MAIN_LDG_LH1_TSN_AT_LATEST_UTILIZATION_DATE',
            'MAIN_LDG_LH1_CSN_AT_LATEST_UTILIZATION_DATE',
            'MAIN_LDG_RH1_NOTES',
            'DATA_SOURCE_MAIN_LDG_RH1',
            'UTILIZATION_START_DATE_MAIN_LDG_RH1',
            'UTILIZATION_END_DATE_MAIN_LDG_RH1',
            'LAST_UTILIZATION_DATE_MAIN_LDG_RH1',
            'MAIN_LDG_RH1_LOCATION',
            'MONTHLY_MAIN_LDG_RH1_UTILIZATION_FH',
            'MONTHLY_MAIN_LDG_RH1_UTILIZATION_FC',
            'MAIN_LDG_RH1_TSN_AT_LATEST_UTILIZATION_DATE',
            'MAIN_LDG_RH1_CSN_AT_LATEST_UTILIZATION_DATE',
            'MAIN_LDG_LH2_NOTES',
            'DATA_SOURCE_MAIN_LDG_LH2',
            'UTILIZATION_START_DATE_MAIN_LDG_LH2',
            'UTILIZATION_END_DATE_MAIN_LDG_LH2',
            'LAST_UTILIZATION_DATE_MAIN_LDG_LH2',
            'MAIN_LDG_LH2_LOCATION',
            'MONTHLY_MAIN_LDG_LH2_UTILIZATION_FH',
            'MONTHLY_MAIN_LDG_LH2_UTILIZATION_FC',
            'MAIN_LDG_LH2_TSN_AT_LATEST_UTILIZATION_DATE',
            'MAIN_LDG_LH2_CSN_AT_LATEST_UTILIZATION_DATE',
            'MAIN_LDG_RH2_NOTES',
            'DATA_SOURCE_MAIN_LDG_RH2',
            'UTILIZATION_START_DATE_MAIN_LDG_RH2',
            'UTILIZATION_END_DATE_MAIN_LDG_RH2',
            'LAST_UTILIZATION_DATE_MAIN_LDG_RH2',
            'MAIN_LDG_RH2_LOCATION',
            'MONTHLY_MAIN_LDG_RH2_UTILIZATION_FH',
            'MONTHLY_MAIN_LDG_RH2_UTILIZATION_FC',
            'MAIN_LDG_RH2_TSN_AT_LATEST_UTILIZATION_DATE',
            'MAIN_LDG_RH2_CSN_AT_LATEST_UTILIZATION_DATE',
            'MAIN_LDG_LH3_NOTES',
            'DATA_SOURCE_MAIN_LDG_LH3',
            'UTILIZATION_START_DATE_MAIN_LDG_LH3',
            'UTILIZATION_END_DATE_MAIN_LDG_LH3',
            'LAST_UTILIZATION_DATE_MAIN_LDG_LH3',
            'MAIN_LDG_LH3_LOCATION',
            'MONTHLY_MAIN_LDG_LH3_UTILIZATION_FH',
            'MONTHLY_MAIN_LDG_LH3_UTILIZATION_FC',
            'MAIN_LDG_LH3_TSN_AT_LATEST_UTILIZATION_DATE',
            'MAIN_LDG_LH3_CSN_AT_LATEST_UTILIZATION_DATE',
            'MAIN_LDG_RH3_NOTES',
            'DATA_SOURCE_MAIN_LDG_RH3',
            'UTILIZATION_START_DATE_MAIN_LDG_RH3',
            'UTILIZATION_END_DATE_MAIN_LDG_RH3',
            'LAST_UTILIZATION_DATE_MAIN_LDG_RH3',
            'MAIN_LDG_RH3_LOCATION',
            'MONTHLY_MAIN_LDG_RH3_UTILIZATION_FH',
            'MONTHLY_MAIN_LDG_RH3_UTILIZATION_FC',
            'MAIN_LDG_RH3_TSN_AT_LATEST_UTILIZATION_DATE',
            'MAIN_LDG_RH3_CSN_AT_LATEST_UTILIZATION_DATE',
        ];

        $data = \DB::table('ABL_DEALS as ad')
            ->join('MSN_LIST as ml', 'ml.ID_MSN', '=', 'ad.MSN_ID')
            ->join('OPERATORS_LIST as ol', 'ol.ID_OPERATOR', '=', 'ad.LESSEE_OPERATOR_ID')
            ->join('AIRCRAFT_VARIANT as av', 'av.Aircraft_ID', '=', 'ad.ID_AIRCRAFTVARIANT')
            ->join('APU as ap', 'ap.ID_APU', '=', 'ad.APU_ID')
            ->join('ENGINE_MODEL as em', 'em.ID_ENGINE_MODEL', '=', 'ad.ID_ENGINMODEL')
            ->join('ENGINE_SERIES as es', 'es.ID_ENGINE_SERIES', '=', 'em.ID_ENGINE_SERIES')
            ->join('LM_UTILIZATION_DETAILS as lmd', 'lmd.ID_ABLDEALS', '=', 'ad.ID_ABL_DEALS')
            ->where('ml.ID_MSN', $msn_id)
            ->select([...$general,...$af_apu,...$engines,...$ldg])
            ->distinct()
            ->orderBy('lmd.Utilization_End_Date_Airframe', 'desc')
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
        return ["payload" => $request->all()];
    }

}
