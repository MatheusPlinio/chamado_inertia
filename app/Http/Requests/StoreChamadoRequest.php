<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreChamadoRequest extends FormRequest
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
            'titulo' => 'required|min:1|max:25',
            'solicitacao' => 'required|min:2',
            'prioridade' => 'required',
            'solicitante' => 'required|min:3|max:50',
            'setor' => 'required|min:1|max:50',
        ];
    }
}
