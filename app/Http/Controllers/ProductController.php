<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_family;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Return de products admin view
        $products = DB::table('products')
            ->join('product_families','products.family_id','=','product_families.id')
            ->select('products.*','product_families.name as family')
            ->paginate(20);
        $families = Product_family::orderBy('name','ASC')->get();
        return view('admin.products.index', [
            'products' => $products,
            'families' => $families
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fields =$request->validate([
            'code' => 'required|unique:products',
            'family' => 'required'
        ]);

        if($fields){
            //Store the familie data
            $product = new Product();
            $product->code = strtoupper($request->code);
            $product->family_id = $request->family;
            $product->updateTimestamps();

            $product->save();

            return redirect()->back()->with('status', 'Producto '. $request->name .' creada exitosamente');
        } else {
            return redirect()->back()->with('status', 'No se pudo crear lel producto'. $request->name);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
