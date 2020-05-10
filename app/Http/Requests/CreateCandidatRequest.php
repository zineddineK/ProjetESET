<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCandidatRequest extends FormRequest
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

                'nom_candidat'=>'required |alpha | regex:/^[\pL\s\-]+$/u',

                'prenom_candidat'=>'required |alpha | regex:/^[\pL\s\-]+$/u',

                'email_candidat'=>'required |email',

                'cin'=>'required | alpha_num',

                //'natio'=>'required |alpha |  regex:/^[\pL\s\-]+$/u',

                'civilite'=>'required | alpha',

                'telephone_mobile'=>'required | alpha_num | max:10',

                //'adresse'=>'required',

                //'pays_resid'=>'required |alpha | regex:/^[\pL\s\-]+$/u',

                //'ville'=>'required |alpha | regex:/^[\pL\s\-]+$/u',

                //'date_de_naissance'=>'required | date',

                //'lieu_de_naissance'=>'required | alpha',

                //'emplois'=>'required | regex:/(^[A-Za-z0-9 ]+$)+/',

                //'rib_empl'=>'required | numeric',

                //'niveau_etude'=>'required',

                //'statut_marital'=>'required',

                'photo'=> 'required|image|mimes:jpeg,png,jpg,bmp|max:2048',

                //'diplome' => 'required | regex:/(^[A-Za-z0-9 ]+$)+/',

                //'date_obtenation' => 'required | date',

                //'etablissement_dip' => 'required | regex:/(^[A-Za-z0-9 ]+$)+/',

                //'specialite' => 'required | regex:/(^[A-Za-z0-9 ]+$)+/',



        ];
    }


 public function messages(){

    return[



        'civilite.required'  => 'Le choix d\'une civilité est obligatoire',

        'civilite.alpha'  => 'Le champ civilité n\'accepte que des données alphabetique',

        'nom_candidat.required'  => 'Nom de l\'employe est obligatoire',

        'nom_candidat.regex'  => 'Le champ Nom de l\'employe n\'accepte que des données alphabetique',

        'prenom_candidat.required' => 'Prenom de l\'employe est obligatoire',

        'prenom_candidat.regex' => 'Le champ Prenom de l\'employe n\'accepte que des données alphabetique',

        'cin.alpha_num' => 'Le champ CIN de l\'employe n\'accepte que des données alphanumérique',

        /*'date_de_naissance.required' => 'Date de naissance est obligatoire ',

        'date_de_naissance.date' => 'Le champ date de nassaince n\'accepte que des données alphanumérique ',

        'lieu_de_naissance.required'=> 'Lieu de naissance est obligatoire',

        'lieu_de_naissance.alpha'=> 'Le champ Lieu de naissance n\'accepte que des données alphabetique',
*/
        'email_candidat.required' => 'Adresse e-mail est obligatoire',

        'email_candidat.emai' => 'Le champ Adresse e-mail n\'accepte que des données de type email, ex: example@example.com',

        'telephone_mobile.required' => 'Numero de téléphone portable est obligatoire',

        'telephone_mobile.string' => 'Le champ de Numero de téléphone n\'accepte que des données alphanumérique',

        'telephone_mobile.max:10' => 'Le champ de Numero de téléphone n\'accepte que 10 chiffres',

        /*'emplois.required' => 'Emplois est obligatoire ',

        'emplois.regex' => 'Le champ Emplois n\'accepte que des données alphabetique ',

        'rib_empl'=>'Le champ RIB n\'accepte que des données numériques',

        'adresse.required' => 'Adresse du prospect est obligatoire ',

        'adresse.regex' => 'Le champ Adresse  n\'accepte que que des données alphanumérique ',

        'pays_resid.required' => 'Pays de residence est obligatoire ',

        'ville.regex' => 'Le champ Ville de l\'employe n\'accepte que des données alphabetique',

        'niveau_etude'=>'Le champ Niveau étude de l\'employe n\'accepte que des données alphanumérique',

        'statut_marital'=>'Le champ Statut marital de l\'employe n\'accepte que des données alphabetique',

        'diplome.required' => 'Le diplôme est obligatoire',

        'diplome.regex' => 'Le champ Diplôme accepte que données alphanumérique',

        'specialite.required' => 'Spécialité est obligatoire',

        'specialite.regex' => 'Le champ spécialité accepte que des données alphabetique',

        'date_obtenation.required'  => 'Date d\'obtention est obligatoire',

        'date_obtenation.integer'  => 'Le champ Date accepte que l\'année d\'obtention du diplôme',

        'etablissement_dip.required' => 'Le champ Etablissement est obligatoire',

        'etablissement_dip.regex' => 'Le champ Etablissement accepte que données alphanumérique',
*/

        'photo.mime' => 'Le format d\'image importer est non-supporté (jpeg,png,jpg,bmp)',

        'photo.required' => 'Le champ photo est obligatoire',

        'photo.max' => 'La taille de la photo importer dépasse la taille autorisée(2048)',


    ];

}
}
