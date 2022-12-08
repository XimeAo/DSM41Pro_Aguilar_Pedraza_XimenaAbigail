<?php

namespace App\Http\Controllers;

use App\Models\estate;
use App\Models\municipality;
use App\Models\typeuser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        //return $groups;
      return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeusers=typeuser::all();
        $estates=estate::all();
        $municipalities=municipality::all();
    
        return view('users.create',  compact('estates','typeusers','municipalities'));

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
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'password'=>'required',
            'birthday'=>'required',
            'sex'=>'required',
            'location'=>'required',
            'street'=>'required',
            'outdoor_number'=>'required',
            'postal_code'=>'required',
            'between_streets'=>'required',
            'estates'=>'required',
            'municipalities'=>'required',
            'typeusers'=>'required',
        ]);
        $user = new User();
        $user->name=$request->input('name');
        $user->phone=$request->input('phone');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->birthday=$request->input('birthday');
        $user->sex=$request->input('sex');
        $user->location=$request->input('location');
        $user->street=$request->input('street');
        $user->outdoor_number=$request->input('outdoor_number');
        $user->indoor_number=$request->input('indoor_number');
        $user->postal_code=$request->input('postal_code');
        $user->between_streets=$request->input('between_streets');
        $user->estates_id=$request->input('estates');
        $user->municipalities_id=$request->input('municipalities');
        $user->typeusers_id=$request->input('typeusers');
        $user->save();
        return redirect ('/users')->with('message', 'El usuario se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeusers=typeuser::all();
        $estates=estate::all();
        $municipalities=municipality::all();
        $user=User::findOrFail($id);
        return view('users.edit', compact('estates','typeusers','municipalities'))->with('users',$user);
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
        $user=User::findOrFail($id);
        $input=$request->all();
        $user->update($input);
        return redirect ('/users')->with('message', 'El usuario se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();
        return redirect ('/users');
    }
}
