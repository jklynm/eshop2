<?php

namespace App\Http\Controllers\admin;
use \App\Models\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->destinationPath = "Pages";
    }
    public function create()
    {
        $page = Page::where('status',1)->orderBy('id', 'DESC')->get();
        return view('admin.page.create',compact('page'));
    }
    public function store(Request $request)
    {
        $data = $request->except('_token','image');
        if($request->file('image'))
        {
            $data['image'] = $request->file('image')->storeAs($this->destinationPath,time().'.'.$request->file('image')->getClientOriginalExtension());
        }
        $page = page::create($data);
        if($page){
            return redirect()->route('page.index')->with('success','Page created Successfully!');
        }else{
            return redirect()->route('page.index')->with('error','Page cannot be Created!');
        }
    }
    public function index()
    {
        $pages = Page::all();
        return view('admin.page.index', compact('pages'));
    }
    public function edit($id)
    {
        $pages = Page::where('id',$id)->first();
        return view('admin.page.edit', compact('pages'));
    }
    public function update(Request $request,$id)
    {
        $pages = Page::where('id',$id)->first();
        $data = $request->except('_token','image');
        if($request->file('image'))
        {
            $data['image'] = $request->file('image')->storeAs($this->destinationPath,time().'.'.$request->file('image')->getClientOriginalExtension());
        }
        if(file_exists($this->destinationPath))
        {
            unlink($this->destinationPath);
        }
        $pages->update($data);
        return redirect()->route('page.index')->with('success','Page updated successfully!');
    }
    public function destroy($id)
    {
        $page = Page::where('id',$id)->first();
        $page->delete();
        return redirect()->route('page.index');
    }
}
