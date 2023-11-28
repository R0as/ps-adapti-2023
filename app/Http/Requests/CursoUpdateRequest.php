<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(auth()->user()->access_level == 0) return true;
        else return false;
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
