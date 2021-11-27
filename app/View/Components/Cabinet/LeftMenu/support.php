<?php

namespace App\View\Components\Cabinet\LeftMenu;

use Illuminate\View\Component;

class support extends Component
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
        return view('components.cabinet.left-menu.support');
    }
}
