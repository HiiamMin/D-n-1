<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'Email' => 'required|email',
                'Password' => 'required',
        ];
    }


    public function messages(): array  
    {
        return [
            'Email.required' => 'Email không được để trống',
            'Email.email' => 'Email không đúng định dạng',
            'Password.required' => 'Password không được để trống',
        ];      
    }

}
