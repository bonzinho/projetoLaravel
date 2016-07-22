<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


class PostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // metodo para verificar se o user está autorizado a a entrar
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //validar as requests, post do formulario do inserir novo Post
        return [
            'title' => 'required|min:8',
            'content' => 'required'
        ];
    }
}
