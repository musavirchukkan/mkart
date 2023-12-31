<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductSaveRequest extends FormRequest
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
            'product_name' => ['required'],
            'price' => ['required'],
            'sale_price' => ['required'],
            'category_id' => ['required'],
            'main_image' => ['nullable'],
            'image' => ['nullable'],
            'description' => ['nullable'],
            'tags' => ['nullable'],
            'stock' => ['required'],
            'is_stock' => ['nullable'],
            'status' => ['nullable'],


        ];
    }
}
