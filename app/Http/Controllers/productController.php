<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    public function index()
    {
       $products=product::all();
       $data=compact('products');
        return view('products')->with($data);
    }
    public function add()
    {
        return view('add');
    }
    public function insert(Request $request)
    {
       // echo"<pre>"
      // print_r($request->all());
        $product=new product;
        $product->name=$request['name'];
        $product->description=$request['description'];
        $product->price=$request['price'];
        $product->discount=$request['discount'];

       
        $product->save();
        return redirect('/');
    }
    public function delete($id)
    {
        $product=product::find($id);
        $product->delete();
        return redirect('/');
    }
 
    public function edit($id)
    {
        $product=product::find($id);
        $data=compact('product');
        return view('update')->with($data);
    }
    public function update(Request $request,$id)
    {
        $product=product::find($id);
        $product->name=$request['name'];
        $product->description=$request['description'];
        $product->price=$request['price'];
        $product->discount=$request['discount'];
        $product->save();
        return redirect('/');
    }
  
   
    
}
