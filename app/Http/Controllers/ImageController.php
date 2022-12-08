<?php

namespace App\Http\Controllers;

use App\Models\image;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = image::all();
        //return $groups;
      return view('images.index', compact('images'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('images.create');
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
            'image'=>'required|image',
            
        ]);

        //$image = new image();
        //$image=$request->input('products');
        //$image->save();
        $imagen=$request->file('image')->store('public/imagenes');
        $url = Storage::url($imagen);
        image::create([
            'image'=>$url 
        ]);
        
        return redirect ('/images')->with('message', 'La imagen se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image = image::findOrFail($id);
        return view('images.show',compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $products=product::all();
        $image=image::findOrFail($id);
        return view('images.edit', compact('products'))->with('images',$image);
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
        $image=image::findOrFail($id);
        //$input=$request->all();
        //$image->update($input);
        
        if($request->hasFile('image')){
            $imagen=$request->file('image');
            $destination = 'public/imagenes';
            $imagename=time(). '-' . $imagen->getClientOriginalName();
            //$uploadSuccess = $request->file('image')->move($destination, $filename);
            $imagen->move($destination. $imagename);

            $image->image=$imagename;

        }

        $image->update($request->all());
        //$imagen=$request->file('image')->store('public/imagenes');
        /*$url = Storage::url($imagen);
        image::update([
            'image'=>$url,
            'products_id'=>$image
        ]);*/
        return redirect ('/images')->with('message', 'La imagen se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = image::findOrFail($id);
        $url = str_replace('storage','public',$image->image);
        Storage::delete($url);
        
        $image->delete();
        return redirect ('/images');
    }
}
