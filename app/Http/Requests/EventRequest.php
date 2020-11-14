<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title' => 'required|min:2',
            'start' => 'date_format:Y-m-d H:i:s|before:end',
            'end' => 'date_format:Y-m-d H:i:s|after:start',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Remplissez le champ Titre de l\'événement',
            'title.min' => 'Le titre de l\'événement doit comporter au moins 03 caractères!',
            'start.date_format' => 'Remplissez une date de début avec un montant valide!',
            'start.before' => 'La date / heure de début doit être inférieure à la date de fin!',
            'end.date_format' => 'Remplissez une date finale avec une valeur valide!',
            'end.after' => 'La date / heure de fin doit être supérieure à la date de début!',
        ];
    }

}
