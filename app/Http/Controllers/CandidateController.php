<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ExcelImport;
use DB;

class CandidateController extends Controller
{
    public function show(){
        $new[] =  DB::table('candidates')
        ->join('jobs','jobs.job_number', 'candidates.id_file')  
        ->get();

        return view('candidate.import')->with('new', $new);
    }

    function store(Request $request){

        $file = $request->file;

        Excel::import(new ExcelImport, $file);
        echo "Yay";
    }
}
