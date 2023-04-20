<?php

namespace App\View\Components\Tabs;

use Illuminate\View\Component;

class Hardware extends Component
{
    public $hardware;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($hardware)
    {
        $this->hardware = $hardware;
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
