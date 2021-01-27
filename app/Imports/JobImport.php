<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class JobImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach($collection as $key=>$value){
            DB::table('jobs')->insert(['job_number' => $value[1], 'job_name' => $value[2], 'job_type' => $value[3],
             'date1' => $value[4], 'date2' => $value[5]]);
        }
    }
}
