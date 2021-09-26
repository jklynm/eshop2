<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use \App\Models\User;

use Illuminate\Http\Request;
use \App\Http\Requests\User\StoreRequest;
use \App\Http\Requests\User\ChangePasswordRequest;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Validator;

class UserController extends Controller
{
    public function create()
    {
        $roles = Role::orderBy('id', 'ASC')->get();
        return view('admin.user.create', compact('roles'));
    }
    public function store(StoreRequest $request)
    {
        $data = $request->except('_token', 'password','password_confirmation','roles');
        $roles = $request->role;
        $data['password'] = bcrypt($request->password);
        $data['password_confirmation'] = bcrypt($request->password_confirmation);
        $user = User::create($data);
        if($user){
            $user->role()->sync($roles);
            return redirect('/user')->with('success','User created Successfully!');

        }else{
            return redirect()->route('user')->with('error','User cannot be Created!');
        }
    }
    public function index(Request $request)
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('admin.user.index',compact('users'));
    }
    public function edit($id)
    {
        $roles = Role::all();
        $users = User::where('id',$id)->with('role')->first();
        $checkedroles = $users->role->pluck('id')->toArray();
        return view('admin.user.edit',compact('users','roles','checkedroles'));
    }
    public function update(Request $request,$id)
    {
        $users = User::where('id',$id)->with('role')->first();
        $data = $request->except('_token','image','password');
        $data['password'] = bcrypt($request->password);
        $users->update($data);
        $users->role()->sync($request->role);
        return redirect()->route('user')->with('success','User updated successfully!');
    }
    public function destroy($id)
    {
        $users = User::where('id',$id)->first();
        $users->delete();
        return redirect()->route('user');
    }

    public function user_change_password()
    {
       return view('admin.user.changePassword');
    }



    public function change_password(ChangePasswordRequest $request){
        $old_password  = auth()->user()->password;

        $oldpass = ($request->oldpassword);


        if($oldpass != $old_password)
       {
           dd('return error');
       } else{
           auth()->user()->update(['password'=>bcrypt($request->newpassword)]);
           dd('return success');
       }

    }


}
