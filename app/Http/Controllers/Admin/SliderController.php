<?php

namespace App\Http\Controllers\admin;
use \App\Models\Slider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->destinationPath = "Sliders";
    }
    public function create()
    {
        $slider = Slider::where('status',1)->orderBy('id', 'DESC')->get();
        return view('admin.slider.create',compact('slider'));
    }
    public function store(Request $request)
    {
        $data = $request->except('_token','image');
        if($request->file('image'))
        {
            $data['image'] = $request->file('image')->storeAs($this->destinationPath,time().'.'.$request->file('image')->getClientOriginalExtension());
        }
        $slider = Slider::create($data);
        if($slider){
            return redirect()->route('slider.index')->with('success','Slider created Successfully!');
        }else{
            return redirect()->route('slider.index')->with('error','Slider cannot be Created!');
        }
    }
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }
    public function edit($id)
    {
        $sliders = Slider::where('id',$id)->first();
        return view('admin.slider.edit', compact('sliders'));
    }
    public function update(Request $request,$id)
    {
        $sliders = Slider::where('id',$id)->first();
        $data = $request->except('_token','image');
        if($request->file('image'))
        {
            $data['image'] = $request->file('image')->storeAs($this->destinationPath,time().'.'.$request->file('image')->getClientOriginalExtension());
        }
        if(file_exists($this->destinationPath))
        {
            unlink($this->destinationPath);
        }
        $sliders->update($data);
        return redirect()->route('slider.index')->with('success','Slider updated successfully!');
    }
    public function destroy($id)
    {
        $slider = Slider::where('id',$id)->first();
        $slider->delete();
        return redirect()->route('slider.index');
    }
}
