<?php

namespace App\Http\Controllers;

use App\Models\sale;
use App\Models\User;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = sale::all();
        //return $groups;
      return view('sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('sales.create',  compact('users'));
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
            'users'=>'required',
            'subtotal'=>'required',
            'iva'=>'required',
            'total'=>'required',
            'status'=>'required',
            'guide_number'=>'required',
        ]);
        $sale = new sale();
        $sale->users_id=$request->input('users');
        $sale->subtotal=$request->input('subtotal');
        $sale->iva=$request->input('iva');
        $sale->total=$request->input('total');
        $sale->status=$request->input('status');
        $sale->guide_number=$request->input('guide_number');
        $sale->save();
        return redirect ('/sales')->with('message', 'La venta se ha registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = sale::findOrFail($id);
        return view('sales.show',compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=User::all();
        $sale=sale::findOrFail($id);
        return view('sales.edit', compact('users'))->with('sales',$sale);
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
        $sale=sale::findOrFail($id);
        $input=$request->all();
        $sale->update($input);
        return redirect ('/sales')->with('message', 'La venta se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sale = sale::findOrFail($id);

        $sale->delete();
        return redirect ('/sales');
    }
}
