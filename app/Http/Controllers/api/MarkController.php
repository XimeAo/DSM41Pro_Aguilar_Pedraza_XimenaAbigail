<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\mark;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marks = mark::all();
        return response()->json(['marksapi'=>$marks],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        mark::create($input);

        return ('La marca se ha dado de alta con exito');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mark = mark::find($id);
        return response()->json($mark,200);
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
        $mark = mark::findOrFail($id);
        $input=$request->all();
        $mark->update($input);

        return ('La marca se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mark = mark::findOrFail($id);

        $mark->delete();

        return ('La marca se elimino de manera correcta');
    }
}
