<?php

namespace App\Http\Controllers\Admin;

use \App\Models\Permission;
use \App\Models\Role;
use Illuminate\Http\Request;
use \App\Http\Requests\Permission\StoreRequest;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    public function create()
    {

        return view('admin.permission.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->except('_token');
        $permissions = Permission::create($data);
        if ($permissions) {
            return redirect()->route('permission')->with('success', 'Permission has been created.');
        } else {
            return redirect()->route('permission')->with('error', 'Permission cannot be created.');
        }
    }
    public function index(Request $request){
        $permissions = Permission::orderBy('id', 'DESC')->get();
        return view('admin.permission.index',compact('permissions'));
    }
    public function edit($id)    {
        $permissions = Permission::where('id',$id)->first();
        return view('admin.permission.edit',compact('permissions'));
    }
    public function update(Request $request,$id)
    {
        $permissions = Permission::where('id',$id)->first();
        $data = $request->except('_token');
        $permissions->update($data);
        return redirect()->route('permission')->with('success','Permission updated successfully!');
    }
    public function destroy($id)    {
        $permissions = Permission::where('id',$id)->first();
        $permissions->delete();
        return redirect()->route('permission');
    }
}
