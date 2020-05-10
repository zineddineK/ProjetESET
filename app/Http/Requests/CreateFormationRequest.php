<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormationRequest extends FormRequest
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
        'libelle_formation' => 'required ',
        'id_st' => 'required',


        ];
    }

    public function messages(){
        return[
        'libelle_formation.required'  => 'Nom du foundation est obligatoire',
        'id_st.required' => 'Structure concerner est obligatoire',
        ];
    }

}
