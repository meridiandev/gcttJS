<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportStudent implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'inputsCertificate' => $row[0],
            'first_name' => $row[1],
            'surname' => $row[2],
            'patronymic' => $row[3],
            'gender' => $row[4],
            'data_of_birth' => $row[5],
            'home_address_1' => $row[6],
            'home_address_2' => $row[7],
            'class_education' => $row[8],
            'location_education' => $row[9],
            'parents' => $row[10],
            'email_address_0' => $row[11],
            'telephone_mobile' => $row[12],
            'arrows' => $row[13],
            'comments' => $row[14],
            'old_arrow' => $row[15],
            'verified' => $row[16],
            'accepted' => $row[17],
        ]);
    }

//    public function headingRow(): int
//    {
//        return 0;
//    }
}
