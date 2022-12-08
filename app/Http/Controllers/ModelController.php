<?php

namespace App\Http\Controllers;

use App\Models\modelo;
use App\Models\mark;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelos = modelo::all();
        //return $groups;
      return view('modelos.index', compact('modelos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marks=mark::all();
        return view('modelos.create',  compact('marks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'modelo'=>'required',
            'year'=>'required',
            'marks'=>'required',
        ]);
        $modelo = new modelo();
        $modelo->model=$request->input('modelo');
        $modelo->year=$request->input('year');
        $modelo->marks_id=$request->input('marks');
        $modelo->save();
        return redirect ('/modelos')->with('message', 'El modelo se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelo = modelo::findOrFail($id);
        return view('modelos.show',compact('modelo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marks=mark::all();
        $modelo=modelo::findOrFail($id);
        return view('modelos.edit', compact('marks'))->with('modelos',$modelo);
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
        $modelo=modelo::findOrFail($id);
        $input=$request->all();
        $modelo->update($input);
        return redirect ('/modelos')->with('message', 'El modelo se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelo = modelo::findOrFail($id);

        $modelo->delete();
        return redirect ('/modelos');
    }
}
