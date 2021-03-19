<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TurboController extends Controller
{
    public $search = null;
    public $filter = null;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Display products view
        $family = DB::table('product_families')
            ->where('name', 'Turbos')
            ->first();

        $products = DB::table('products')
            ->select('code','family_id', 'category_id')
            ->where('family_id','=',2)
            ->orderBy('code')
            ->paginate('12');

        $this->filter = null;

        return view('products.index', [
            'family' => $family,
            'products' => $products,
            'search' => $this->search,
            'filter' => $this->filter
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
        $product = DB::table('lubricants')
            ->join('products','lubricants.code','=', 'products.code')
            ->join('product_categories','products.category_id','=','product_categories.id')
            ->join('product_families','products.family_id','=','product_families.id')
            ->select('lubricants.*','product_families.name as family','product_families.url as url','product_categories.name as category')
            ->where('lubricants.code', $code)
            ->first();

        return view('products.detail', [
            'product' => $product
        ]);
    }

    public function search(Request $request){
        //Validations
        $request->validate([
            'search' => 'required'
        ]);

        $this->search = $request->search;
        $family = DB::table('product_families')
            ->where('name', 'Lubricantes')
            ->first();

        $products = DB::table('lubricants')
            ->join('products','lubricants.code','=','products.code')
            ->select('lubricants.*','products.family_id as family_id', 'products.category_id as category_id')
            ->where('lubricants.code','LIKE',"%{$this->search}%")
            ->orWhere('description','LIKE',"%{$this->search}%")
            //->orWhere('detail','LIKE',"%{$this->search}%")
            ->paginate(12);

        return view('products.index', [
            'family' => $family,
            'products' => $products,
            'search' => $this->search,
            'filter' => $this->filter
        ]);
    }

    public function filter($category){

        $family = DB::table('product_families')
            ->where('name', 'Lubricantes')
            ->first();

        $products = DB::table('products')
            ->select('code','family_id', 'category_id')
            ->where('family_id','=',3)
            ->where('category_id', $category)
            ->orderBy('code')
            ->paginate('12');

        $this->filter = DB::table('product_categories')
            ->select('name')
            ->where('id', $category)
            ->first();


        return view('products.index', [
            'family' => $family,
            'products' => $products,
            'search' => $this->search,
            'filter' => $this->filter
        ]);
    }
}
