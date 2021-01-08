<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::orderBy('id','desc')->get();
        return view('backend.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('backend.products.create',compact('categories'));
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
            //input name ==> validation rules
            'codeno'=>'required',
            'name'=>'required',
            'price'=> 'required',
            'photo'=>'required | mimes:jpeg,jpg,png',
            'category' =>'required'
        ]);

        //upload
        if($request->file()){
            //624872374532_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName(); //rename photo by time generating 
            
            //itemimg//624872374532_a.jpg
                                        //input name      //folder name             //storage/app/public
            $filePath = $request -> file('photo')->storeAs('productimg', $fileName,'public'); //create folder

            $path = '/storage/'.$filePath; //save in storage folder
        }

        $product = new product; //item model

              //table-columnname
        $product->codeno = $request->codeno; 
        $product->name = $request->name;
        $product->price = $request->price;  
        $product->discount = $request->discount; 
        $product->description = $request->description; 
        $product->category_id = $request->category;
        $product->photo = $path;
        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories=Category::all();
        return view('backend.products.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //dd($request);
        $request->validate([
            //input name ==> validation rules
            'codeno'=>'required',
            'name'=>'required',
            'price'=> 'required',
            'photo'=>'sometimes | mimes:jpeg,jpg,png',
            'category'=>'required'
        ]);

        //upload
        if($request->file()){
            //624872374532_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName(); //rename photo by time generating 
            
            //itemimg//624872374532_a.jpg
                                        //input name      //folder name             //storage/app/public
            $filePath = $request -> file('photo')->storeAs('productimg', $fileName,'public'); //create folder

            $path = '/storage/'.$filePath; //save in storage folder
            $product->photo = $path;
        }

              //table-columnname
        $product->codeno = $request->codeno; 
        $product->name = $request->name;
        $product->price = $request->price;  
        $product->discount = $request->discount; 
        $product->description = $request->description; 
        $product->category_id = $request->category;
        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        // delete old image

        // redirect
        return redirect()->route('products.index');
    }
}
