<?php

namespace App\Http\Requests\Endereco;

use Illuminate\Foundation\Http\FormRequest;

class SalvarRequest extends FormRequest
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
            'cep' => 'required|string',
            'logradouro' => 'required|string',
            'bairro' => 'required|string',
            'localidade' => 'required|string',
            'estado' => 'required|string',
            'numero' => 'required|string',
        ];
    }
}
