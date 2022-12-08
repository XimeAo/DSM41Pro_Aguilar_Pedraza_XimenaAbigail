<?php

namespace App\Http\Controllers;

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
      return view('typeusers.index', compact('typeusers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('typeusers.create');
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
            'type_user'=>'required',
        ]);
        $typeuser = new typeuser();
        $typeuser->type_user=$request->input('type_user');
        $typeuser->save();
        return redirect ('/typeusers')->with('message', 'El Tipo de usuario se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typeuser = typeuser::findOrFail($id);
        return view('typeusers.show',compact('typeuser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $typeuser = typeuser::findOrFail($id);
       

        return view('typeusers.edit',compact('typeuser'));
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
        $typeuser= typeuser::findOrFail($id);
        $input=$request->all();
        $typeuser->update($input);
        return redirect ('/typeusers')->with('flash_message', 'El Tipo de usuario se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $typeusers = typeuser::findOrFail($id);
        
        $typeusers->delete();

        return redirect ('/typeusers');
    }
}
