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
        /*$product = DB::table('turbos')
            ->join('products','turbos.code','=', 'products.code')
            ->join('product_categories','products.category_id','=','product_categories.id')
            ->join('product_families','products.family_id','=','product_families.id')
            ->select('turbos.*','product_families.name as family','product_families.url as url','product_categories.name as category')
            ->where('turbos.code', $code)
            ->first();*/

        $product = DB::table('turbos')
            ->join('products', 'turbos.code','=','products.code')
            ->select('turbos.*','products.category_id as category_id','products.family_id as family_id')
            ->where('turbos.code', $code)
            ->first();

        $family = DB::table('product_families')
            ->where('id', 2)
            ->first();

        $category = DB::table('product_categories')
            ->where('id', $product->category_id)
            ->first();

        return view('products.detail', [
            'product' => $product,
            'family' => $family,
            'category' => $category
        ]);
    }

    public function search(Request $request){
        //Validations
        $request->validate([
            'search' => 'required'
        ]);

        $this->search = $request->search;
        $family = DB::table('product_families')
            ->where('name', 'Turbos')
            ->first();

        $products = DB::table('turbos')
            ->join('products','turbos.code','=','products.code')
            ->select('turbos.*','products.family_id as family_id', 'products.category_id as category_id')
            ->where('turbos.code','LIKE',"%{$this->search}%")
            ->orWhere('description','LIKE',"%{$this->search}%")
            ->orWhere('model','LIKE',"%{$this->search}%")
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
            ->where('name', 'Turbos')
            ->first();

        $products = DB::table('products')
            ->select('code','family_id', 'category_id')
            ->where('family_id','=',2)
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
