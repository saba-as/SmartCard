<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newUserRequest extends FormRequest
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


    public function messages()
    {
        return [
            'name.required' =>   'اسم المستخدم مطلوب',
            'email.required' => 'البريد الالكتروني مطلوب',
            'email.email' => 'يرجى كتابة بريد الكتروني صالح',
            'password.required' => 'كلمة السر مطلوبة',
            'password.min' => 'كلمة السر يجب ان تكون على الاقل ٦ احرف',
            'password_confirmation.required_with' => 'يرجى اعادة كتابة كلمة السر',
            'password_confirmation.same' => 'يجب ان تكون كلمة السر مطابقة'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            "name" => "required",
            "email" => "required|email",
            "password" => "required|min:6",
            'password_confirmation' => 'required_with:password|same:password'

        ];
    }
}
