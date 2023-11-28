<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => ['required', 'string'],
            'descricao' => ['required', 'max:300'],
            'imagem' => ['image'],
            'contratado' => ['boolean'],
            'cursos_id' => ['required'],

        ];
    }

    public function messages()
    {
        return [
            'nome.required' => "O campo precisa ser informado",
            'nome.max' => "O campo deve ter no máximo 100 caracteres",
            'descricao.max' => "O campo deve ter no máximo 3000 caracteres",
            'imagem.image' => "A imagem precisa ser dos tipos PNG,JPEG,JPG, etc..."
        ];
    }
}
