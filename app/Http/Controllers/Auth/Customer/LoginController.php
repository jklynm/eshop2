<?php

namespace App\Http\Controllers\Auth\Customer;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Auth;
use Session;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function  __construct()
    {
        $this->middleware('guest:web')->except(['logout','customerlogout']);
    }

    public function customerlogout(Request  $request)
    {
        $user = Auth::user();
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('loginCustomer');
    }
    public function login(Request $request){
//        dd($request->all());
//        if(session()->has('email') && session()->has('name'))
//        {
////            return redirect('admin/dashboard');
//            return redirect()->route('dashboard');
//        }
        if(auth()->attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            $user = Auth::user();
            session(['user_id'=>$user->id]);
            session(['email'=>$user->email]);
            session(['name'=>$user->name]);
            $roles1 = $user->roles;
            $roles = collect();
            $permissions = collect();
            foreach($roles1 as $rle)
            {
                $permissions->push($rle->permissions);
                $roles->push($rle->id);
            }
//            dd($roles);
//            dd($permissions);
            $access_permissions = [];
            foreach($permissions->flatten(1) as $index=>$permission)
            {
                $access_permissions[] = $permission->guard_name;
            }
//            dd($access_permissions);
            session()->put('access_permissions',$access_permissions);
            session()->put('roles',$roles);
            return redirect()->route('customer.dashboard');
//            if($user->is_admin == 1)
//            {
//                return  redirect()->route('dashboard');
//            } else
//            {
//                return redirect()->route('customer.dashboard');
//            }
        }else{
            return redirect()->back();
        }
    }


    public function loginCustomer (Request $request)
    {
        return view('frontend.customer.login');
    }

    public function loginCustomerSubmit(Request $request)
    {
        if(auth()->attempt(['email'=>$request->email,'password'=>$request->password])) {
            $user = Auth::user();
            session(['user_id' => $user->id]);
            session(['email' => $user->email]);
            session(['name' => $user->name]);
            $roles1 = $user->roles;
            $roles = collect();
            $permissions = collect();
            foreach ($roles1 as $rle) {
                $permissions->push($rle->permissions);
                $roles->push($rle->id);
            }
            //            dd($roles);
            //            dd($permissions);
            $access_permissions = [];
            foreach ($permissions->flatten(1) as $index => $permission) {
                $access_permissions[] = $permission->guard_name;
            }
            //            dd($access_permissions);
            session()->put('access_permissions', $access_permissions);
            session()->put('roles', $roles);

            return redirect()->route('customer.dashboard');
        }else{
            return redirect()->back()->withInput();
        }

    }


}
