<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(Request $request)
    {
//        dd(\DB::connection()->getDatabaseName(), \DB::connection()->getPDO());

        $data = $this->step1();
        return view('pages.steps.steps-index', $data);
    }

    public function step(Request $request, $step)
    {
        $data = $this->$step();
        return view("pages.steps.steps-index", $data);
    }

    public function step1()
    {
        $column_names = config('properties.Column_Names.step1');
        $data = ['column_names' => $column_names, 'step' => 'step1'];
        return $data;
    }

    public function step2()
    {
        $column_names = config('properties.Column_Names.step2');
        $data = ['column_names' => $column_names, 'step' => 'step2'];
        return $data;
    }

    public function step3()
    {
        $data = ['step' => 'step3'];
        return $data;
    }

}
