<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
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
            'title'         => 'required',
            'category_id'   => 'required',
            'body'          => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'Insira o nome.',
            'category_id.required'  => 'Selecione a(s) categoria(s).',
            'body.required'         => 'Insira o conteúdo.'
        ];
    }
}
