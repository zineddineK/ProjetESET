<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCollaborateurRequest extends FormRequest
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
        'nom_colla'=>'required |  regex:/^[\pL\s\-]+$/u',
        'prenom_colla'=>'required |  regex:/^[\pL\s\-]+$/u',
        'email_colla'=>'required | email',
        'password'=>'required | string | min:7',
        'fonction'=>'required |  regex:/^[\pL\s\-]+$/u',
        'cin'=>'required | alpha_num',

        ];
    }

    public function messages(){

        return[
        'nom_colla.required'=>'Le nom de collaborateur est obligatoire',
        'nom_colla.regex' => 'Le champs Nom accepte que les valeurs alphabétique',
        'prenom_colla.required'=>'Le prenom de collaborateur est obligatoire',
        'prenom_colla.regex' => 'Le champs Prenom accepte que les valeurs alphabétique',
        'email_colla.required'=>'L\'email de collaborateur est obligatoire',
        'email_colla.email' => 'Le champs E-mail accepte que des email',
        'password.required'=>'Le mot de passe de collaborateur est obligatoire',
        'password.min'=>'Le mot de passe doit contenir au moins 7 caractères.',
        'fonction.required'=>'La fonction de collaborateur est obligatoire',
        'fonction.regex' => 'Le champs Fonction accepte que les valeurs alphabétique',
        'cin.required'=>'Le CIN de collaborateur est obligatoire',
        'cin.alpha_num' => 'Le champs Numéro CIN accepte que des valeurs alphanumerique',

        ];
    }


}
