<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ReservationFormRequest extends FormRequest
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
                'nom' => [
                    'required',
                    'string',
                    'max:100'
                ],

                'prenom' => [
                    'required',
                    'string',
                    'max:100'
                ],

                'num_piece' => [
                    'required',
                    'string',
                    'max:100'
                ],

                'sexe' => [
                    'required'
                ],

                'classe' => [
                    'required'
                ],

                'code_vol' => [
                    'required',
                    'string',
                    'max:100'
                ],
            ];
            return $rules;
    }
}