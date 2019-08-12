<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MusicaRequest extends FormRequest
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
                'nome_musica' => 'required|min:2|max:100',
                'nome_artista' => 'required|min:2|max:100',
                'rank_musica' => 'required|numeric|digits_between:1,4',
        ];
    }
    public function messages()
    {
        return [
            'nome_musica.required' => 'O campo de nome da musica é obrigatório',
            'nome_musica.min' => 'No mínimo 2 e no máximo 100',
            'nome_artista' => 'O campo de nome da musica é obrigatório',
            'rank_musica.required' => 'O campo de nome da musica é obrigatório',
            'rank_musica.numeric' => 'O campo de rank da musica tem que ser númerico',
            'rank_musica.digits_between' => 'No mínimo 1 e no máximo 1000',
        ];
    }


}
