<?php

namespace App\Http\Controllers\Admin;

use \App\Models\Category;
use Illuminate\Http\Request;
use \App\Http\Requests\Category\StoreRequest;
use \App\Http\Requests\Category\UpdateRequest;
use App\Http\Controllers\Controller;
class CategoryController extends Controller
{
    public function index()
    {
        $this->authorize('view-category');
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        $this->authorize('create-category');
        $parents = Category::whereNull('parent_id')->with('allCategories')->get();
        return view('admin.category.create',compact('parents'));
    }





    public function store(StoreRequest $request)
    {
        $this->authorize('create-category');
        $data = $request->except('_token');
        $category = Category::create($data);
        if($category){
            return redirect()->route('category')->with('success','Category created Successfully!');
        }else{
            return redirect()->route('category')->with('error','Category cannot be Created!');
        }
    }

    public function edit($id)
//        public function edit($slug)
    {
        $this->authorize('edit-category');
        $category = Category::where('id',$id)->first();
//        $category = Category::where('slug',$slug)->first();
        $patenr= Category::where('id', '!=', $id)->with('allCategories')->whereNull('parent_id')->get();
//        dd($patenr);
        $parents =  $patenr->where('parent_id', '!=', $id)->all();
//        dd($parents);
        return view('admin.category.edit',compact('category','parents'));
    }

    public function update(Request $request,$id)
    {
        $this->authorize('edit-category');
        $category = Category::where('id',$id)->first();
        $data = $request->except('_token','status');
        $category->update($data);
        return redirect()->route('category')->with('success','Category updated successfully!');
    }


    public function destroy($id)
    {
        $this->authorize('delete-category');
        $category = Category::where('id',$id)->first();
        $category->delete();
        return redirect()->route('category');
    }
}
