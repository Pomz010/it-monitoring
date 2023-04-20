<?php

namespace App\View\Components\Tabs;

use Illuminate\View\Component;

class TonerBalance extends Component
{
    public $tonerBalance;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tonerBalance)
    {
        $this->tonerBalance = $tonerBalance;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tabs.toner-balance');
    }
}
