<?php

namespace App\Exports;

use App\Models\Student;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportStudent implements FromView
{
    public function view(): View
    {
        return view('students.exports.all_students', [
            'students' => Student::all()
        ]);
    }
}
