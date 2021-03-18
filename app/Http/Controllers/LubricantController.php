<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class LubricantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category = 0)
    {
        //Display products view
        $family = DB::table('product_families')
            ->where('name', 'Lubricantes')
            ->first();

        $families = DB::table('product_families')
            ->orderBy('name','ASC')
            ->get();

        //return $families;

        $search = null;
        $fillter = null;

        if($category != '0'){
            $products = DB::table('products')
                ->select('code','family_id', 'category_id')
                ->where('family_id','=',3)
                ->where('category_id', $category)
                ->orderBy('code')
                ->paginate('12');

            $fillter = DB::table('product_categories')
                ->select('name')
                ->where('id', $category)
                ->first();

        } else {
            $products = DB::table('products')
                ->select('code','family_id', 'category_id')
                ->where('family_id','=',3)
                ->orderBy('code')
                ->paginate('12');
        }


        //return $products;

        return view('products.index', [
            'familyId' => $family,
            'families' => $families,
            'products' => $products,
            'search' => $search,
            'fillter' => $fillter
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

    public function search(Request $request){
        //Validations
        $fields =$request->validate([
            'search' => 'required'
        ]);

        $fillter = null;
        $search = $fields->search;
        $family = DB::table('product_families')
            ->where('name', 'Lubricantes')
            ->get();

        return view('products.index', [
            'familyId' => $family,
            'families' => $families,
            'products' => $products,
            'search' => $search,
            'fillter' => $fillter
        ]);
    }

}
