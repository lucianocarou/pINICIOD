<?php

namespace App\View\Components\Inicio;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Drawer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $sql = file_get_contents(__DIR__ . "/Sql/Drawer.sql");
        $items = DB::select($sql);

        return view('components.inicio.drawer', ['items' => $items]);
    }
}
