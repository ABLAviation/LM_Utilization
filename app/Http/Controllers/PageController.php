<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(Request $request)
    {
//        dd(\DB::connection()->getDatabaseName(), \DB::connection()->getPDO());

        return $this->step($request, 1);
        // return view('pages.steps.steps-index', $data);
    }

    public function step(Request $request, $stepNumber)
    {
        $column_names = config("properties.Column_Names.step$stepNumber");
        $stepsLimit = config("properties.stepsLimit");
        $data = ['column_names' => $column_names, 'stepNumber' => (int)$stepNumber, 'stepsLimit' => (int)$stepsLimit];
        return view("pages.steps.steps-index", $data);
    }

}
