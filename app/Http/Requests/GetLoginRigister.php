<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetLoginRigister extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email' => 'required|unique:users',
            'phone' => 'required|numeric',
            'address' => 'required',
            'password' => 'required|min:5',
        ];
    }
}
