<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\JobImport;

class JobController extends Controller
{
    public function show_job(){
        return view('job.import_job');
    }

    function store_job(Request $request){

        $file = $request->file;
        
        Excel::import(new JobImport, $file);
        echo "Yay new job";
    }
}
