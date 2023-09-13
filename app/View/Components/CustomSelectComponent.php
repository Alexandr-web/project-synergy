<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CustomSelectComponent extends Component
{
    public string $id;
    public string $tabBody;
    public bool $white = false;
    public bool $small = false;
    public $options;

    /**
     * Create a new component instance.
     */
    public function __construct(string $id, string $tabBody, $options, bool $white = false, bool $small = false)
    {
        $this->id = $id;
        $this->tabBody = $tabBody;
        $this->options = $options;
        $this->white = $white;
        $this->small = $small;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.custom-select-component');
    }
}
