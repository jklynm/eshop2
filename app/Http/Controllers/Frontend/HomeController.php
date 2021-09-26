<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;


use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\SiteConfigration;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $categories = Category::where('status',1)->get();
        $sliders = Slider::where('status',1)->take(3)->orderBy('id','desc')->get();
//        dd($configrations);
        return view('frontend.index', compact('categories', 'sliders'));
    }

    public function contact()
    {
        $categories = Category::all();
//        $configrations = SiteConfigration::first();
        return view('frontend.contact', compact('categories'));
    }
    public function contactstore(Request $request)
    {
        $data = $request->except('_token');
        $contacts = Contact::create($data);
        if($contacts){
            return redirect()->route('contact.index')->withInput()->with('success','Informations Submitted Successfully!');
        }else{
            return redirect()->route('contact.index')->with('error','Informations cannot be Submitted!');
        }

    }
}
