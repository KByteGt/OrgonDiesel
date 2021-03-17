<?php

namespace App\Http\Controllers;

use App\Models\Product_category;
use App\Models\Product_family;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$categories = DB::table('product_categories')
            ->join('product_families','product_categories.family_id','=','product_families.id')
            ->select('product_categories.*','product_families.name as family')
            ->get();*/
        $categories = Product_category::orderBy('product_categories.name', 'ASC')
            ->join('product_families','product_categories.family_id','=','product_families.id')
            ->select('product_categories.*','product_families.name as family')
            ->paginate(10);
        $families = Product_family::orderBy('name','ASC')->get();

        return view('admin.categories.index',[
            'categories' => $categories,
            'families' => $families,
            'count' => 1
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
        //Validations

        $fields =$request->validate([
            'name' => 'required||min:5',
            'family' => 'required'
        ]);


        if($fields){
            //Store the familie data
            $category = new Product_category;
            $category->name = $request->name;
            $category->family_id = $request->family;
            $category->updateTimestamps();

            $category->save();

            return redirect()->back()->with('status', 'Categoria '. $request->name .' creada exitosamente');
        } else {
            return redirect()->back()->with('status', 'No se pudo crear la categoria'. $request->name);
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
        return redirect()->back();
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
