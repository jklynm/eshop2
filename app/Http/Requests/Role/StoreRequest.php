<?php

namespace App\Http\Requests\Role;



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
            'name' => 'required|unique:roles|max:255',
        ];
    }

    public function  messages(){
        return [
            'name.required' => 'Name  is required',
            'name.unique' => 'Duplicate User Role',
        ];
    }
}
