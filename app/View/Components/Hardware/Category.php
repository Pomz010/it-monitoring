<?php

namespace App\View\Components\Hardware;

use Illuminate\View\Component;

class Category extends Component
{
    public $hardwareCategories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($hardwareCategories)
    {
        $this->hardwareCategories = $hardwareCategories;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hardware.category');
    }
}
