<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OurServiceComponent extends Component
{
    public $image, $serviceName, $desc;
    public $modal = null;
    /**
     * Create a new component instance.
     */
    public function __construct($image, $serviceName, $desc, $modal = null)
    {
        $this->image = $image;
        $this->serviceName = $serviceName;
        $this->desc = $desc;
        $this->modal = $modal;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.our-service-component');
    }
}
