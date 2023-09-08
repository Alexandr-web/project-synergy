<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ResultMeetingComponent extends Component
{
    public bool $submit = false;

    /**
     * Create a new component instance.
     */
    public function __construct(bool $submit = false)
    {
        $this->submit = $submit;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.result-meeting-component');
    }
}
