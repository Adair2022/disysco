<?php

namespace App\Http\Controllers;

use App\Models\landpage1;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storelandpage1Request;
use App\Http\Requests\Updatelandpage1Request;

class Landpage1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $landpage1=Landpage1::all();

        return view('landpage1.index',compact('landpage1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $landpage1 = Landpage1::all();
        return view('landpage1.create' ,compact('landpage1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storelandpage1Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storelandpage1Request $request)
    {
        //
        $landpage1=$request->all();

        Landpage1::create($landpage1);
        return redirect()->route('landpage1.index')->with('agregar','Ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\landpage1  $landpage1
     * @return \Illuminate\Http\Response
     */
    public function show(landpage1 $landpage1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\landpage1  $landpage1
     * @return \Illuminate\Http\Response
     */
    public function edit(landpage1 $landpage1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatelandpage1Request  $request
     * @param  \App\Models\landpage1  $landpage1
     * @return \Illuminate\Http\Response
     */
    public function update(Updatelandpage1Request $request, landpage1 $landpage1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\landpage1  $landpage1
     * @return \Illuminate\Http\Response
     */
    public function destroy(landpage1 $landpage1)
    {
        //
    }
}
