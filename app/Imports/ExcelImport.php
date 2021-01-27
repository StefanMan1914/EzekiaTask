<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class ExcelImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach($collection as $key=>$value){
            DB::table('candidates')->insert(['id_file' => $value[0], 'first_name' => $value[1], 'last_name' => $value[2],
             'email' => $value[3]]);
        }
    }
}
