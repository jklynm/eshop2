<?php

namespace App\Http\Controllers\Admin;


use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;

class DashboardController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }
    public function index(Request  $request){
//
//        if($request->session()->has('access_permissions'))
//        {
//            dd(session()->get('access_permissions'));
//            dd('adsf');
//        }
        $categories = Category::all();
        $users = User::all();
        $products = Product::all();
        $dashproducts = Product::orderBy('id', 'DESC')->limit(3)->get();
        return view('admin.dashboard',compact('categories','users','products','dashproducts'));
    }


}
