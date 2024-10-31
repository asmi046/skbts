<?php

namespace App\View\Components;

use Closure;
use App\Models\WorkPart;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class WorksListMain extends Component
{
    public $all_parts;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->all_parts = WorkPart::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.works-list-main');
    }
}
