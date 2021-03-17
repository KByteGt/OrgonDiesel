<?php

namespace App\Http\Controllers;

use App\Models\Product_family;
use Illuminate\Http\Request;

class FamiliesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $families = Product_family::orderBy('name', 'ASC')->paginate(10);

        return view('admin.families.index', [
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
        //Validations
        $fields =$request->validate([
           'name' => 'required||min:5',
           'url' => 'required'
        ]);

        if($fields){
            //Store the familie data
            $family = new Product_family;
            $family->name = $request->name;
            $family->url = str_replace(" ", "", strtolower($request->url));
            $family->updateTimestamps();

            $family->save();

            return redirect()->back()->with('status', 'Familia '. $request->name .' creada exitosamente');
        } else {
            return redirect()->back()->with('status', 'No se pudo crear la familia'. $request->name);
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
        //Return view
        $family = Product_family::find($id);

        return view('admin.families.detail', [
            'family' => $family
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect()->back();
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

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->back();
    }
}
