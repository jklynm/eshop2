<?php

namespace App\Http\Requests\User;



use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Rule;
use App\Http\Requests\Request;

class ChangePasswordRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return auth()->user();
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $user = auth()->user()->password;

        return [
            'oldpassword' => 'required',
            'newpassword' => 'min:6|required',
            'password_confirmation' => 'required|same:newpassword'
        ];
    }

    public function  messages(){
        return [
            'oldpassword.required'=>'Password is Required',
            'oldpassword.old_password'=>'Password Didnot match',
            'newpassword.min'=> 'Password must be minimum 6 characters',
            'password_confirmation.same' => 'Password Does not Match'
        ];
    }
}
