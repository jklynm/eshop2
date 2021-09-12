<?php

namespace App\Http\Controllers\Admin;

use \App\Models\Category;
use Illuminate\Http\Request;
use \App\Http\Requests\Category\StoreRequest;
use App\Http\Controllers\Controller;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->except('_token');
        $category = Category::create($data);
        if($category){
            return redirect()->route('category')->with('success','Category created Successfully!');
        }else{
            return redirect()->route('category')->with('error','Category cannot be Created!');
        }
    }

    public function edit($id)
    {
        $category = Category::where('id',$id)->first();
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
        $category = Category::where('id',$id)->first();
        $data = $request->except('_token','status');
        $category->update($data);
        return redirect()->route('category')->with('success','Category updated successfully!');
    }


    public function destroy($id)
    {
        $category = Category::where('id',$id)->first();
        $category->delete();
        return redirect()->route('category');
    }
}
