<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavbarComponent extends Component
{
    public $list = [];
    public $activeRoute = '';

    /**
     * Create a new component instance.
     */
    public function __construct($list, $activeRoute)
    {
        $this->list = $list;
        $this->activeRoute = $activeRoute;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar-component');
    }
}
