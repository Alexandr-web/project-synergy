<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StudentsListComponent extends Component
{
    public bool $viewAttestationSheet = false;

    public function __construct(bool $viewAttestationSheet = false)
    {
        $this->viewAttestationSheet = $viewAttestationSheet;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.directorate.students-list-component');
    }
}
