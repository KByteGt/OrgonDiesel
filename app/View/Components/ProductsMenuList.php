<?php

namespace App\View\Components;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class ProductsMenuList extends Component
{
    public $lubricantsList;
    public $turbosList;
    //public $inyectionsList;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->lubricantsList = DB::table('product_categories')
            ->where('family_id',3)
            ->where('active',true)
            ->get();

        $this->turbosList = DB::table('product_categories')
            ->where('family_id', 2)
            ->where('active', true)
            ->get();

        /*
        $this->inyectionsList = DB::table('product_categories')
            ->where('family_id',1)
            ->where('active', true)
            ->get();
        */
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.products-menu-list');
    }
}
