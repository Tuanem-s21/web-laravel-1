<?php

namespace App\Http\Requests\Admin\Client;

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
    
    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:clients,email',
            'password' => 'required|min:8|confirmed',
            'image' => 'required|mimes:jpeg,png,jpg,gif'
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'Vui long nhap email',
            'email.email' => 'Vui long nhap dinh dang email',
            'email.unique' => 'Email da ton tai',
            'password.required' => 'Vui long nhap mat khau',
            'password.min' => 'Mat khau phai co it nhat 8 ky tu',
            'password.confirmed' => 'Mat khau khong trung khop',
            'image.required' => 'Vui long chon hinh dai dien san pham',
            'image.mimes' => 'Hinh san pham chi duoc phep co duoi la: jpeg,png,jpg,gif',
        ]; 
    }
}
