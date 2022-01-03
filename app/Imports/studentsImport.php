<?php

namespace App\Imports;


use App\Models\students;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class studentsImport implements ToModel,WithHeadingRow 
{
    /**
    * @param array  $row
    */
    public function model(array $row)
    {
        return new students([
            'Studentname' => $row['Studentname'],
            'surname' => $row['surname'],
        ]);
    }
}
