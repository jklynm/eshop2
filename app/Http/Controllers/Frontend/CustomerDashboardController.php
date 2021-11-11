<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerDashboardController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }

    public function dashboardCustomer (Request $request)
    {
        $access_permissions = session()->get('access_permissions');
        if(in_array('manage-customers',$access_permissions)){
//            $this->authorize('manage-customers');
            return view('frontend.customer.dashboard');
        }else{
            return redirect()->back();
       }
    }

}
