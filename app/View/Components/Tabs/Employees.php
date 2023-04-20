<?php

namespace App\View\Components\Tabs;

use Illuminate\View\Component;

class Employees extends Component
{

    public $employees;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($employees)
    {
        $this->employees = $employees;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tabs.employees');
    }
}
