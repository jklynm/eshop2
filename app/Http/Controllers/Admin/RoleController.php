<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use \App\Http\Requests\Role\StoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;

class RoleController extends Controller
{
    public function create()
    {
        $permissions = Permission::orderBy('id', 'ASC')->get();
        return view('admin.role.create', compact('permissions'));
    }
    public function store(StoreRequest $request)
    {
        $data = $request->except('_token');
        $permissions = $request->permission;
        $role = Role::create($data);
        if($role){
            $role->permission()->sync($permissions);
            return redirect()->route('role')->with('success','User Role created Successfully!');
        }else{
            return redirect()->route('role')->with('error','User Role cannot be Created!');
        }
    }
    public function index(Request $request){
        $roles = Role::orderBy('id', 'DESC')->get();
        return view('admin.role.index',compact('roles'));
    }
    public function edit($id)    {
        $permissions = Permission::all();
        $roles = Role::where('id',$id)->with('permission')->first();
        $checkedpermission = $roles->permission->pluck('id')->toArray();
        return view('admin.role.edit',compact('roles','permissions','checkedpermission'));
    }
    public function update(Request $request,$id)
    {
        $roles = Role::where('id',$id)->first();
        $data = $request->except('_token');
        $roles->update($data);
        $roles->permission()->sync($request->permission);
        return redirect()->route('role')->with('success','User Role updated successfully!');
    }
    public function destroy($id)    {
        $roles = Role::where('id',$id)->first();
        $roles->delete();
        return redirect()->route('role');
    }
}
