<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterPostRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>['required','string','min:3','max:50'],
            'email'=>['required','string','email','unique:users'],           
            'password'=>['required','string','min:6','max:10','confirmed'], 
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Adı Soyadı',
            'email' => 'E-Posta',           
            'password' => 'Şifre',
        ];
    }

}
