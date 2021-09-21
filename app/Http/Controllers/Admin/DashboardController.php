<?php

namespace App\Http\Controllers\Admin;


use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        return view('admin.dashboard',compact('categories','users'));
    }


}
