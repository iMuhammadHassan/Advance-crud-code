<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class form extends Component
{
    public $action;
    public $formattr;

    /**
     * Create a new component instance.
     */
    public function __construct($action, $formattr)
    {
        $this->action = $action;
        $this->formattr = $formattr;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form');
    }
}
