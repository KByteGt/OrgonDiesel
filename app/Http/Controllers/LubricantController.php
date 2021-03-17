<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $family = DB::table('product_families')
            ->where('name', 'Lubricantes')
            ->get();

        $categories = DB::table('product_categories')
            ->where('family_id', $family[0]->id)
            ->orderBy('name','ASC')
            ->get();

        //return $categories;

        $families = DB::table('product_families')
            ->orderBy('name','ASC')
            ->get();

        //return $families;

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
