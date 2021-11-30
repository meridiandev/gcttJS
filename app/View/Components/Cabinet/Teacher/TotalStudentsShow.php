<?php

namespace App\View\Components\Cabinet\Teacher;

use Illuminate\View\Component;

class TotalStudentsShow extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.cabinet.teacher.total-students-show');
    }
}