<?php

namespace App\View\Components;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class mostSold extends Component
{
    public $products;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Obtener listado de productos

        /*
        $this->products = DB::table('products')
            //->join('product_families', 'products.family_id','=','product_families.id')
            //->select('products.*', 'product_families.url as url')
            ->orderBy('products.score','DESC')
            ->limit(4);*/
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.most-sold');
    }
}
