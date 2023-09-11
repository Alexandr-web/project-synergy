<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PublicInfoComponent extends Component
{
    public string $idList = 'documents-list';

    /**
     * Create a new component instance.
     */
    public function __construct(string $idList = 'documents-list')
    {
        $this->idList = $idList;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.directorate.public-info-component');
    }
}
