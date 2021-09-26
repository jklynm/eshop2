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
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {

        $categories = $this->getCategoryListDropDown();
        return view('admin.category.create',compact('categories'));
    }


    public function  getCategoryListDropDown()
    {
        $categories = Category::where('parent_id',0)->get();
        $selectBox = '';
        foreach ($categories as $category)
        {
            $selectBox .= '<option value = "'.$category->id.'">'.$category->title.'</option>';
            $selectBox .= $this->getSubCategoryListDropDown($category);
        }
        return $selectBox;
    }

    public function getSubCategoryListDropDown($category,$level=1)
    {
        $selectBox = '';
        if($category->subCategories)
        {
             $level++;
            foreach ($category->subCategories as $subCategory)
            {
                $title = str_repeat('-',$level).$subCategory->title;
                $selectBox .= '<option value = "'.$subCategory->id.'">'.$title.'</option>';
                $selectBox .= $this->getSubCategoryListDropDown($subCategory,$level);
            }
            return $selectBox;
        }
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
//        public function edit($slug)
    {
        $category = Category::where('id',$id)->first();
//        $category = Category::where('slug',$slug)->first();
        $categories = $this->getCategoryListDropDown();
        return view('admin.category.edit',compact('category','categories'));
    }

    public function update(UpdateRequest $request,$id)
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
