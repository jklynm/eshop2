<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use \App\Models\SiteConfigration;
use Illuminate\Http\Request;

class ConfigrationController extends Controller
{
    public function __construct()
    {
        $this->destinationPath = "Settings";
    }
    public function configration_setting(){
        $setting = SiteConfigration::first();
        return view('admin.configration.setting', compact('setting'));
    }
    public function update(Request $request,$id){
        $data = $request->except('_token','logo');
        if($request->file('logo'))
        {
            $data['logo'] = $request->file('logo')->storeAs($this->destinationPath,time().'.'.$request->file('logo')->getClientOriginalExtension());
        }
        if(file_exists($this->destinationPath))
        {
            unlink($this->destinationPath);
        }
        $configration = SiteConfigration::find($id);
        if($configration->update($data)){
            return redirect()->route('configration.setting')->with('success','Informations Updated Successfully!');
        }else{
            return redirect()->route('configration.setting')->with('error','Informations cannot be Updated!');
        }

    }
}
