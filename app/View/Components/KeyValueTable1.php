<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class KeyValueTable1 extends Component
{
    public array $collection;
    public string $tableTitle;
    public string $tableColumnsType;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $columnsType, $content)
    {
        $this->tableTitle = $title != null ? $title : 'no_caption';
        $this->tableColumnsType = $columnsType;
        $this->collection = $content;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.key-value-table1');
    }
}
