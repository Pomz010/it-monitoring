<?php

namespace App\View\Components\Tabs;

use Illuminate\View\Component;

class Departments extends Component
{
    public $departments;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($departments)
    {
        $this->departments = $departments;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tabs.departments');
    }
}
