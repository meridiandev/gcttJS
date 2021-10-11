<?php

namespace App\View\Components\Cabinet;

use Illuminate\View\Component;

class CabinetLeftMainMenu extends Component
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
        return view('components.cabinet.cabinet-left-main-menu');
    }
}
