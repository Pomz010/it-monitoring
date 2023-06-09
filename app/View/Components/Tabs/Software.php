<?php

namespace App\View\Components\Tabs;

use Illuminate\View\Component;

class Software extends Component
{
    public $softwares;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($softwares)
    {
        $this->softwares = $softwares;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tabs.software');
    }
}
