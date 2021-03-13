<?php

namespace App\View\Components;

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

        //Data example
        $this->products = [
            ['code' => 'OD-C104', 'family' => 'Turbo', 'description' => 'Turbo para camión', 'image' => '/products/C104.jpg', 'url' => '/turbos/turbo/od-c104'],
            ['code' => 'OD-C104', 'family' => 'Turbo', 'description' => 'Turbo para camión', 'image' => '/products/C104.jpg', 'url' => '/turbos/turbo/od-c104'],
            ['code' => 'OD-C104', 'family' => 'Turbo', 'description' => 'Turbo para camión', 'image' => '/products/C104.jpg', 'url' => '/turbos/turbo/od-c104'],
            ['code' => 'OD-C104', 'family' => 'Turbo', 'description' => 'Turbo para camión', 'image' => '/products/C104.jpg', 'url' => '/turbos/turbo/od-c104'],
        ];
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
