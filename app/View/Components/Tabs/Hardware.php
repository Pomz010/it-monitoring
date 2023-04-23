<?php

namespace App\View\Components\Tabs;

use Illuminate\View\Component;

class Hardware extends Component
{
    public $hardwares;
    public $hardwareCategories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($hardwares, $hardwareCategories)
    {
        $this->hardwares = $hardwares;
        $this->hardwareCategories = $hardwareCategories;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tabs.hardware');
    }
}
