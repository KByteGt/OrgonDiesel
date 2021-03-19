<?php

namespace App\View\Components;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class FamilyMenu extends Component
{
    public $families;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->families = DB::table('product_families')
            ->orderBy('name','ASC')
            ->where('id','<>',$id)
            ->where('active', true)
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.family-menu');
    }
}
