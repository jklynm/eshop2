<?php

namespace App\Http\Requests\User;



use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Rule;
use App\Http\Requests\Request;

class StoreRequest extends Request
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
        return [
            'name' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'min:6|required',
            'password_confirmation' => 'required|same:password'
        ];
    }

      public function  messages(){
      return [
      'name.required' => 'Name  is required',
          'name.unique' => 'Duplicate User',
          'email.unique' => 'Duplicate Email',
          'password.required' => 'Password is Required',
          'password.min'=> 'Password must be minimum 6 characters',
          'password_confirmation.same' => 'Password Does not Match'
     ];
    }
}
