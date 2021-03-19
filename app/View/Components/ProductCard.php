<?php

namespace App\View\Components;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class ProductCard extends Component
{
    public $product;
    public $family;
    public $category;
    public $url;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($code, $family, $category, $url)
    {
        $this->family = $family;
        $this->category = $category;
        $this->url = $url;

        if($family == "3"){
            $this->product = DB::table('lubricants')
                ->where('code', $code)
                ->first();
        }else {
            return 'Error, la categoria no existe';
        }

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.product-card');
    }
}
