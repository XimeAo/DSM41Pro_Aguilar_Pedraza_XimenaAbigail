<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\typeuser;
use Illuminate\Http\Request;

class TypeuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeusers = typeuser::all();
        //return $groups;
        return response()->json(['typeusersapi'=>$typeusers],200);
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
        typeuser::create($input);

        return ('El tipo de usuario se ha dado de alta con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typeuser = typeuser::find($id);
        return response()->json($typeuser,200);
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
        $typeuser = typeuser::findOrFail($id);
        $input=$request->all();
        $typeuser->update($input);

        return ('El tipo de usuario se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $typeuser = typeuser::findOrFail($id);

        $typeuser->delete();

        return ('El tipo de usuario se elimino de manera correcta');
    }
}
