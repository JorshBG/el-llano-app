<?php

namespace App\View\Components\tables;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableDT extends Component
{
    /**
     * Create a new component instance.
     */
    public array $headers;

    public function __construct($headers)
    {
        $this->headers = $headers;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tables.table-d-t');
    }
}
