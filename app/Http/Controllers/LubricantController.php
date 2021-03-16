<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LubricantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Display products view
        $family = ['id' => 3, 'name' => 'Lubricantes', 'url' => 'lubricants'];
        $categories = [
            [ 'id' => 1, 'name' => 'motos'],
            [ 'id' => 2, 'name' => 'vehiculos pesados'],
            [ 'id' => 3, 'name' => 'vehiculos livianos'],
            [ 'id' => 4, 'name' => 'refrigerantes']
        ];
        $families = [
            ['id' => 1, 'name' => 'Inyección Diésel', 'url' => 'inyections'],
            ['id' => 2, 'name' => 'Turbos', 'url' => 'turbos'],
            ['id' => 3, 'name' => 'Lubricantes', 'url' => 'lubricants']
        ];
        $search = null;
        $items = [
            ['id' => 'OD-25009', 'category' => 'Motocicleta', 'description' => '4T 20W-50 Semisintetico 1L', 'image' => '/products/lubricants/DSC_0342.png'],
            ['id' => 'OD-25012', 'category' => 'Vehiculos livianos', 'description' => '20W-50 Semisintetico Plus 5L', 'image' => '/products/lubricants/DSC_0320.png'],
            ['id' => 'OD-25009', 'category' => 'Motocicleta', 'description' => '4T 20W-50 Semisintetico 1L', 'image' => '/products/lubricants/DSC_0342.png'],
            ['id' => 'OD-25012', 'category' => 'Vehiculos livianos', 'description' => '20W-50 Semisintetico Plus 5L', 'image' => '/products/lubricants/DSC_0320.png'],
            ['id' => 'OD-25009', 'category' => 'Motocicleta', 'description' => '4T 20W-50 Semisintetico 1L', 'image' => '/products/lubricants/DSC_0342.png'],
            ['id' => 'OD-25009', 'category' => 'Motocicleta', 'description' => '4T 20W-50 Semisintetico 1L', 'image' => '/products/lubricants/DSC_0342.png'],
            ['id' => 'OD-25012', 'category' => 'Vehiculos livianos', 'description' => '20W-50 Semisintetico Plus 5L', 'image' => '/products/lubricants/DSC_0320.png']
        ];

        return view('products.index', [
            'familyId' => $family,
            'families' => $families,
            'categories' => $categories,
            'products' => $items,
            'search' => $search
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  $code
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        //Display detail view

        return view('products.detail', ['code' => $code]);
    }

}
