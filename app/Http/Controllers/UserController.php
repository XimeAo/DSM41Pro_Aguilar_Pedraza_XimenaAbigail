<?php

namespace App\Http\Controllers;

use App\Models\estate;
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
        $estates=estate::all();
    
        return view('users.create',  compact('estates'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $user = User::find($id);
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
