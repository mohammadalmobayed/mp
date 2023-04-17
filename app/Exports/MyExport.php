<?php

namespace App\Exports;

use App\Models\Finance;
use App\Models\User;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;

class MyExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $students = Student::get(); 
        $data = ['students',$students];
        return $data[1];
    }
}
