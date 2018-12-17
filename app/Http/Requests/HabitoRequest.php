<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HabitoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
            • Determina	se	temos	autorização	de	realizar	essa	requisição
            • Se	retornar	true quer	dizer	que	a	requisição	pode	ser	executada
            • Se	retornar	false a	requisição	será	bloqueada
            • Podemos	definir	a	regra	que	quisermos	nela
            • Para	o	nosso	caso,	retornaremos	true por	padrão
     */

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
      • Método	responsável	pelas	regras	de	validação	de	campos
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:5',
            'descricao' => 'required',
            'tp_habito' => 'required',
            'data_inicio_controle' => 'required',
            'objetivo' => 'required|numeric'
        ];
    }
}
