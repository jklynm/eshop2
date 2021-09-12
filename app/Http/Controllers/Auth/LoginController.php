<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Auth;
use Session;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    public function index(){
        return view('auth.login');
    }
    public function logout(Request $request){
       $this->guard()->logout();
       $request->session()->flush();
       $request->session()->regenerate();
       return redirect('login');

    }
    public function login(Request $request){
        if(session()->has('email') && session()->has('name'))
        {
            return redirect('dashboard');
        }
        if(auth()->attempt(['email'=>$request->email,'password'=>$request->password]))
        {
           $user = Auth::user();
//           $user = auth()->user();
            session(['user_id'=>$user->id]);
            session(['email'=>$user->email]);
            session(['name'=>$user->name]);
            $roles = $user->role();
//            dd($roles);
//            foreach($user->role() as $rle)
//            {
//             dd($rle);
//            }
           return  redirect()->route('dashboard');
        }else{
            return redirect()->route('login');
        }
    }


}
