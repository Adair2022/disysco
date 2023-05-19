<?php

namespace App\Http\Controllers;

use App\Models\Landpage2;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLandpage2Request;
use App\Http\Requests\UpdateLandpage2Request;

class Landpage2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $landpage2=Landpage2::all();

        return view('landpage2.index',compact('landpage2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        /* return view("landpage2.create"); */

        $landpage2 = Landpage2::all();
        return view('landpage2.create' ,compact('landpage2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLandpage2Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLandpage2Request $request)
    {
        //
        /* $landpage2=Landpage2->all();
        Landpage2::create($landpage2);
        return view('landpage2.index',compact('landpage2')); */
        $landpage2=$request->all();

        Landpage2::create($landpage2);
        return redirect()->route('landpage2.index')->with('agregar','Ok');

        /* $attributes = $request->validated(); // Obtener los atributos validados desde el formulario

        $landpage2 = Landpage2::create($attributes); // Crear un nuevo registro con los atributos
    
        return view('landpage2.index', compact('landpage2')); */

        /* $data = $request->validated();
    Landpage2::create($data);
    return redirect()->route('landpage2.index'); */
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Landpage2  $landpage2
     * @return \Illuminate\Http\Response
     */
    public function show(Landpage2 $landpage2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Landpage2  $landpage2
     * @return \Illuminate\Http\Response
     */
    public function edit(Landpage2 $landpage2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLandpage2Request  $request
     * @param  \App\Models\Landpage2  $landpage2
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLandpage2Request $request, Landpage2 $landpage2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Landpage2  $landpage2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landpage2 $landpage2)
    {
        //
    }
}
