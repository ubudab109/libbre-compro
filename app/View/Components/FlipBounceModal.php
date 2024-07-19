<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FlipBounceModal extends Component
{
    public $id, $title;
    /**
     * Create a new component instance.
     */
    public function __construct($id, $title)
    {
        $this->id = $id;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.flip-bounce-modal');
    }
}
