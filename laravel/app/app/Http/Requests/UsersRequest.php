<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            'name'=> 'required',
            'email'=>'required',
            'role_id'=>'required',
            'is_active'=>'required',
            'password'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'      => 'Insira o nome.',
            'email.required'     => 'Insira o e-mail.',
            'role_id.required'   => 'Selecione a função.',
            'is_active.required' => 'Selecione o estado.',
            'password.required'  => 'Insira a palavra-passe.'
        ];
    }
}
