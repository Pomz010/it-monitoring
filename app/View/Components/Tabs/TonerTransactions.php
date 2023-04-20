<?php

namespace App\View\Components\Tabs;

use Illuminate\View\Component;

class TonerTransactions extends Component
{
    public $tonerTransactions;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tonerTransactions)
    {
        $this->tonerTransactions = $tonerTransactions;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tabs.toner-transactions');
    }
}
