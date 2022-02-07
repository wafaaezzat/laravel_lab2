<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            // 'name' => 'required|unique:categories|min:5|max:20',
            'name' => 'required|min:5|max:20',
            'description' => 'required|min:5|max:200',
            'slug'=>'required|unique:products|min:5|max:50'
        ];
    }
}
