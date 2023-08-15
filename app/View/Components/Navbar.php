<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public string $role = '';
    public int $id;

    /**
     * Create a new component instance.
     */
    public function __construct(int $id, string $role)
    {
        $this->id = $id;
        $this->role = $role;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
