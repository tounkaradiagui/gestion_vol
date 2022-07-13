<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class VolFormRequest extends FormRequest
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
        $rules = [
            'code_vol' => [
                'required',
                'string',
                'max:20'
            ],

            'date_depart' => [
                'required',
                'string'
                
            ],

            'heure_depart' => [
                'required',
                'string'
                
            ],

            'destination' => [
                'required',
                'string',
                'max:100'
            ],

            'Nb_places_A' => [
                'string'
                
            ],

            'Nb_places_B' => [
                'string'
            
            ],

            'prix_classe_A' => [
                'required',
                'string',
                'max:50'
            ],

            'prix_classe_B' => [
                'required',
                'string',
                'max:50'
            ],
        ];
        return $rules;
    }
}
