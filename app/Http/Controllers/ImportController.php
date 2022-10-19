<?php

namespace App\Http\Controllers;

use App\Http\Import\DataImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function import(Request $request)
    {
        try {
            Excel::import(new DataImport, $request->file('file'));
        } catch (\Exception $e) {
//            dd($e->getMessage());
        }
    }
}
