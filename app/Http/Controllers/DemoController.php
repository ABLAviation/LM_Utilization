<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{

    public function index(Request $request)
    {
        $x = \DB::table('ABL_DEALS as ad')
            ->join('MSN_LIST as ml', 'ml.ID_MSN', '=', 'ad.MSN_ID')
            ->join('OPERATORS_LIST as ol', 'ol.ID_OPERATOR', '=', 'ad.LESSEE_OPERATOR_ID')
            ->join('AIRCRAFT_VARIANT as av', 'av.Aircraft_ID', '=', 'ad.ID_AIRCRAFTVARIANT')
            ->join('APU as ap', 'ap.ID_APU', '=', 'ad.APU_ID')
            ->join('ENGINE_MODEL as em', 'em.ID_ENGINE_MODEL', '=', 'ad.ID_ENGINMODEL')
            ->join('ENGINE_SERIES as es', 'es.ID_ENGINE_SERIES', '=', 'em.ID_ENGINE_SERIES')
            ->join('LM_UTILIZATION as lm', 'lm.ID_ABLDEALS', '=', 'ad.ID_ABL_DEALS')
            ->where('ml.ID_MSN', 3)
            ->select([
                'ad.AIRCRAFTREGISTRATION_NUMBER',
                'av.AIRCRAFTVARIANT_CAPTION',
                'em.MODEL_CAPTION',
                'ap.Model',
                'ad.MANUFACTUREDATE',
                'ad.AIRCRAFT_OWNER',
            ])
            ->distinct()
            ->get();
        dd($x);
//        $x = $request->all();
//        $msn = [];
//        if (count($x)) {
//            $msn = \DB::table('ABL_DEALS as a')
//                ->join('MSN_LIST as m', 'a.MSN_ID', '=', 'm.ID_MSN')
//                ->where('LESSEE_OPERATOR_ID', $request->get('operator'))
//                ->select('ID_MSN', 'MSN_Description')
//                ->get();
//
//        }
//
        $data = [
//            'operators' => $this->getOperators($request),
//            'msn' => $msn
        ];

        return view('pages.home', $data);
    }

    public function getOperators(Request $request)
    {
        $operators = \DB::table('OPERATORS_LIST')
            ->select('ID_OPERATOR', 'Operator_caption');
        $searchTerm = $request->get('term');
        if ($searchTerm) {
            $operators = $operators->where('Operator_caption', 'like', '%' . $searchTerm . '%');
        }
        $operators = $operators->get();
        return ['operators' => $operators];
    }

    public function getMsn(Request $request)
    {
        $operator_id = $request->get('operator_id');
        $msn = \DB::table('MSN_LIST as ml')
            ->select('ID_MSN', 'MSN_Description')
            ->join('ABL_DEALS as ad', 'ml.ID_MSN', '=', 'ad.MSN_ID')
            ->where('LESSEE_OPERATOR_ID', $operator_id)
            ->get();
        return ['msn' => $msn];
    }

    public function getData(Request $request)
    {
        $msn_id = $request->get('msn_id');
        $data = \DB::table('ABL_DEALS as ad')
            ->join('MSN_LIST ml', 'ml.ID_MSN', '=', 'ad.MSN_ID')
            ->join('OPERATORS_LIST ol', 'ol.ID_OPERATOR', '=', 'ad.LESSEE_OPERATOR_ID')
            ->join('AIRCRAFT_VARIANT av', 'av.Aircraft_ID', '=', 'ad.ID_AIRCRAFTVARIANT')
            ->join('APU ap', 'ap.ID_APU', '=', 'ad.APU_ID')
            ->join('ENGINE_MODEL em', 'em.ID_ENGINE_MODEL', '=', 'ad.ID_ENGINMODEL')
            ->join('ENGINE_SERIES es', 'es.ID_ENGINE_SERIES', '=', 'em.ID_ENGINE_SERIES')
            ->join('LM_UTILIZATION lm', 'lm.ID_ABLDEALS', '=', 'ad.ID_ABL_DEALS')
            ->where('ml.MSN_ID', $msn_id)
            ->get();
        return ['data' => $data];
    }
}
