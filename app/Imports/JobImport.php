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
            DB::table('jobs')->insert(['job_number' => $value[0], 'job_name' => $value[1], 'job_type' => $value[2],
             'date1' => $value[3], 'date2' => $value[4]]);
        }
    }
}
