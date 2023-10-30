<?php

namespace App\Http\Requests\Admin\Voucher;

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
            'title' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif',
            'time_start' => 'required',
            'time_end' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Vui long nhap title',
            'image.required' => 'Vui long chon hinh dai dien voucher',
            'image.mimes' => 'Hinh voucher chi duoc phep co duoi la: jpeg,png,jpg,gif',
            'time_start.required' => 'Vui long nhap ngay mo voucher',
            'time_end.required' => 'Vui long nhap ngay dong voucher',
        ]; 
    }
}
