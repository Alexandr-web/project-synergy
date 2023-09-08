<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ResultLastMeetingComponent extends Component
{
    public bool $checkbox = false;

    /**
     * Create a new component instance.
     */
    public function __construct(bool $checkbox = false)
    {
        $this->checkbox = $checkbox;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.result-last-meeting-component');
    }
}
