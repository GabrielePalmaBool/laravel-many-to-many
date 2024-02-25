<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ErorrsMessages extends FormRequest
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
            'nome_progetto'=>'required|string|min:3|max:20',
            'data_pubblicazione'=>'required',
            'type_id'=>'required',
            'tech_id'=>'required',
        ];

    }

    public function messages()
    {
        return [
            
            'nome_progetto.required' => 'Il nome non può essere vuoto',
            'nome_progetto.string' => 'Il nome deve essere una stringa',
            'nome_progetto.min' => 'Il nome deve avere almeno 3 caratteri',
            'nome_progetto.max' => 'Il nome deve avere massimo 20 caratteri',

            'data_pubblicazione.required' => 'Selezionare una data',

            'type_id.required' => 'Selezionare uno tipo',

            'tech_id.required' => 'Selezionare una o più tecnologie',

        ];

    }

}
