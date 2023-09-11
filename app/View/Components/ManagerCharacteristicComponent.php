<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ManagerCharacteristicComponent extends Component
{
    public bool $submit = false;
    public bool $readonly = false;

    /**
     * Create a new component instance.
     */
    public function __construct(bool $submit = false, bool $readonly = false)
    {
        $this->submit = $submit;
        $this->readonly = $readonly;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.manager-characteristic-component');
    }
}
