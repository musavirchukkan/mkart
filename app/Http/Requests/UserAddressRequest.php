<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'fname' => ['required'],
            'lname' => ['required'],
            'house_name' => ['required'],
            'street' =>[ 'required'],
            'city' => ['required'],
            'state' => ['required'],
            'pincode' => ['required'],
            'country' => ['required'],
            'phone' => ['required'],
            'email' =>[ 'required'],
        ];
    }
}
