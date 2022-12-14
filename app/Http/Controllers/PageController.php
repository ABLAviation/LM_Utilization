<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(Request $request)
    {
//        dd(\DB::connection()->getDatabaseName(), \DB::connection()->getPDO());
        $column_names = config("properties.Column_Names");
        $stepsLimit = config("properties.stepsLimit");
        $data = [
            'column_names' => $column_names,
            'stepsLimit' => (int)$stepsLimit,
        ];
        return view("pages.steps.steps-index", $data);
        // return view('pages.steps.steps-index', $data);
    }

}
