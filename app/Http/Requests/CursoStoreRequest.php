<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoStoreRequest extends FormRequest
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
            'curso' => ['required', 'string']
        ];
    }

    public function messages()
    {
        return [
            'type.required' => "O campo precisa ser informado",
            'type.max' => "O campo deve ter no máximo 100 caracteres"
        ];
    }
}
