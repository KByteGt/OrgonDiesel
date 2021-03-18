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

        $products = DB::table('products')
            ->select('code')
            ->where('family_id','=',3)
            ->orderBy('code')
            ->paginate('12');

        //return $products;

        return view('products.index', [
            'familyId' => $family,
            'families' => $families,
            'categories' => $categories,
            'products' => $products,
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
