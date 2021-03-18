<?php

namespace App\View\Components;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class CategoryMenu extends Component
{
    public $categories;
    public $family;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->categories = DB::table('product_categories')
            ->where('family_id', $id)
            ->select('id','name')
            ->orderBy('name','ASC')
            ->get();

        $this->family = DB::table('product_families')
            ->where('id', $id)
            ->select('url')
            ->first();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.category-menu');
    }
}
