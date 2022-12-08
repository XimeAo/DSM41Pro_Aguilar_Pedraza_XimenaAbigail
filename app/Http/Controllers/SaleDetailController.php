<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\sale;
use App\Models\sales_detail;
use Illuminate\Http\Request;

class SaleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$sales_details = sales_detail::all();
        //return $groups;
      return view('sales_details.index', compact('sales_details'));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$sales=sale::all();
        $products=product::all();
        return view('sales_details.create',  compact('sales','products'));*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$sales_detail = new sales_detail();
        $sales_detail->quantity=$request->input('quantity');
        $sales_detail->price=$request->input('price');
        $sales_detail->sales_id=$request->input('sales');
        $sales_detail->products_id=$request->input('products');
       
        $sales_detail->save();
        return redirect ('/sales_details')->with('message', 'El detalle de venta se ha registrado correctamente');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       /* $sales_detail = sales_detail::find($id);
        return view('sales_details.show',compact('sales_detail'));*/
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
