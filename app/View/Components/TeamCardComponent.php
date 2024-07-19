<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TeamCardComponent extends Component
{
    public $picture, $name, $position;
    /**
     * Create a new component instance.
     */
    public function __construct($picture, $name, $position)
    {
        $this->picture = $picture;
        $this->name = $name;
        $this->position = $position;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.team-card-component');
    }
}
