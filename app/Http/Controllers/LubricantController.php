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
        //
        $family = 'lubricantes';
        $categorys = ['motos', 'vehiculos pesados', 'vehiculos livianos', 'refrigerantes'];
        $items = [
            ['id' => 'od-123', 'nombre' => 'producto 1'],
            ['id' => 'od-124', 'nombre' => 'producto 2'],
            ['id' => 'od-125', 'nombre' => 'producto 3'],
            ['id' => 'od-066', 'nombre' => 'orden 66']
        ];

        return view('products', [
            'productFamily' => $family,
            'productCategorys' => $categorys,
            'products' => $items
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  $category
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        //

        return "Lubricants by {$category} - category";
    }

    /**
     * Display the specified resource.
     *
     * @param $category
     * @param $id
     * @return void
     */
    public function showCategorys($category, $id)
    {
        //

        return "Lubricants, {$category}, {$id}";
    }

}
