<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ExcelImport;

class CandidateController extends Controller
{
    public function show(){
        return view('candidate.import');
    }

    function store(Request $request){

        $file = $request->file;

        Excel::import(new ExcelImport, $file);
        echo "Yay";
    }
}
