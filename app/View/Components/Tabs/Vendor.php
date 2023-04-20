<?php

namespace App\View\Components\Tabs;

use Illuminate\View\Component;

class Vendor extends Component
{
    public $vendor;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($vendor)
    {
        $this->vendor = $vendor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tabs.vendor');
    }
}
