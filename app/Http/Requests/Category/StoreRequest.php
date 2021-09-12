<?php

namespace App\Http\Requests\Category;



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
            'title' => 'required|unique:categories|max:255',
        ];
    }

    public function  messages(){
        return [
            'title.required' => 'Category Title is required',
            'title.unique' => 'Duplicate Category',
        ];
    }
}
