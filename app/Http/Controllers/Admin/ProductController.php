<?php

namespace App\Http\Controllers\Admin;

use \App\Models\Product;
use \App\Models\Category;

use App\Http\Controllers\Controller;
use \App\Http\Requests\Product\StoreRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        $categories = Category::where('status',1)->orderBy('id', 'DESC')->get();
        return view('admin.product.create',compact('categories'));

    }
    public function store(StoreRequest $request)
    {
        $data = $request->except('_token','image');
        $product = Product::create($data);
        if($product){
            return redirect()->route('product')->with('success','Product created Successfully!');
        }else{
            return redirect()->route('product')->with('error','Product cannot be Created!');
        }
    }
    public function index(Request $request){
        $products = Product::orderBy('id', 'DESC')->get();
        return view('admin.product.index',compact('products'));
    }
    public function edit($id)
    {
        $categories = Category::where('status',1)->orderBy('id', 'DESC')->get();
        $product = Product::where('id',$id)->first();
        return view('admin.product.edit',compact('product', 'categories'));
    }

    public function update(Request $request,$id)
    {
        $product = Product::where('id',$id)->first();
        $data = $request->except('_token','image');
        $product->update($data);
        return redirect()->route('product')->with('success','Item updated successfully!');

    }
    public function destroy($id)
    {
        $product = Product::where('id',$id)->first();
        $product->delete();
        return redirect()->route('product');
    }
}
