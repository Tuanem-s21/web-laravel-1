<?php

namespace App\Http\Requests\Admin\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'password' => 'required|min:8|confirmed',
        ];
    }
    public function messages(): array
    {
        return [
            'password.required' => 'Vui long nhap mat khau',
            'password.min' => 'Mat khau phai co it nhat 8 ky tu',
            'password.confirmed' => 'Mat khau khong trung khop',
        ]; 
    }
}
