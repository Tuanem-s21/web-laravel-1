<?php

namespace App\Http\Requests\Admin\Staff;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:staffs,email',
            'image' => 'required|mimes:jpeg,png,jpg,gif'
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'Vui long nhap email',
            'email.email' => 'Vui long nhap dinh dang email',
            'email.unique' => 'Email da ton tai',
            'image.required' => 'Vui long chon hinh dai dien san pham',
            'image.mimes' => 'Hinh san pham chi duoc phep co duoi la: jpeg,png,jpg,gif',
        ]; 
    }
}
