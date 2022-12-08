<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\image;
use App\Models\mark;
use App\Models\modelo;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::all();
        //return $groups;
      return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marks=mark::all();
        $modelos=modelo::all();
        $categories=category::all();
        $images=image::all();
        return view('products.create',  compact('marks','modelos','categories','images'));

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
            'product'=>'required',
            'description'=>'required',
            'price'=>'required',
            'stock'=>'required',
            'marks'=>'required',
            'modelos'=>'required',
            'categories'=>'required',
            'images'=>'required'
        ]);

        $product = new product();
        $product->product=$request->input('product');
        $product->description=$request->input('description');
        $product->price=$request->input('price');
        $product->stock=$request->input('stock');
        $product->marks_id=$request->input('marks');
        $product->modelos_id=$request->input('modelos');
        $product->categories_id=$request->input('categories');
        $product->images_id=$request->input('images');
        $product->save();
        return redirect ('/products')->with('message', 'El producto se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = product::findOrFail($id);
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelos=modelo::all();
        $categories=category::all();
        $marks=mark::all();
        $images=image::all();
        $product=product::findOrFail($id);
        return view('products.edit', compact('modelos','categories','marks'))->with('products',$product);
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
        $product=product::findOrFail($id);
        $input=$request->all();
        $product->update($input);
        return redirect ('/products')->with('message', 'El producto se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = product::findOrFail($id);

        $product->delete();
        return redirect ('/products');
    }
}
