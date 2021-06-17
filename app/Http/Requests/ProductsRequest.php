<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
{
    //protected $redirectRoute = 'products.create';

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
            'id_brand' => 'required | min:1',
            'name' => 'required | min:5 | max:50',
            'description' => 'required | string',
            'price' => 'required | numeric | min:1 | max:100000',
            'stock' => 'required | integer | min:1 | max:32765',
            'image' => 'required | image | mimes:jpg,jpeg,png,gif,svg| max:2048',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre del producto'
        ];
    }
}
