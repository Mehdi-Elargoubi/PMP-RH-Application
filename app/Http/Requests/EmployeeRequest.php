<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name'=>'required',
            'matr'=> $this->route('id') ? 'required': 'required|unique:employees',
            // 'image'=> $this->route('id') ? 'image|mimes:png,jpg,jpeg|max:4096' : 'image|mimes:png,jpg,jpeg|max:4096',
            'image'=> 'nullable|image|mimes:png,jpg,jpeg|max:4096',

        ];
    }
}
