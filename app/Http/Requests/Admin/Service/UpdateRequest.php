<?php

namespace App\Http\Requests\Admin\Service;

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
            'name' => 'required|unique:services,name',
            'price' => 'required|numeric|gt:10000',
            'intro' => 'required',

        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'name.unique' => 'Tên sản phẩm đã tồn tạị',
            'price.required' => 'Vui lòng nhập giá sản phẩm',
            'price.numeric' => 'Giá sản phẩm phải là số',
            'price.gt' => 'Giá sản phẩm phải lớn hơn 10.000 VND',
            'intro.required' => 'Vui lòng nhập mô tả', 
        ];
    }
}
