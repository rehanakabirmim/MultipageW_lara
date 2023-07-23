<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //for add product
    public function index(){
        return view('backend.product.add');
    }
    //product store
    public function store(Request $request){
        $p1 = new Product();
        $p1->product_name = $request->p_name;
        $p1->product_des =$request->p_des;
        $p1->product_qty =$request->p_qty;
        $p1->product_wrty =$request->p_wrty;
        $p1->product_price =$request->p_price;
        $p1->save();
        return redirect()->route('product.manage');
        
    }
    //All product show
    public function show(){
       $products= Product::all();
        return view ('backend.product.manage',compact('products'));
    }

    //product delete
    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return back();

    }
    //status active to inactive
    public function atoi($id){
        $product = Product::find($id);
        $product->status =0;
        $product->update();
        return back();

    }
    //status inactive to active
    public function itoa($id){
        $product = Product::find($id);
        $product->status =1;
        $product->update();
        return back();

    }

    //product edit
    public function edit($id){
        $product = Product::find($id);
        return view('backend.product.edit',compact('product'));
     

    }
    //product update
    public function update(Request $request,$id){
        $product = Product::find($id);
        $product->product_name = $request->p_name;
        $product->product_des =$request->p_des;
        $product->product_qty =$request->p_qty;
        $product->product_wrty =$request->p_wrty;
        $product->product_price =$request->p_price;
        $product->update();
        return redirect()->route('product.manage');
    }
        

}
