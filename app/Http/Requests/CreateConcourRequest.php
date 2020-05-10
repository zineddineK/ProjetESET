<?php



namespace App\Http\Requests;



use Illuminate\Foundation\Http\FormRequest;



class CreateConcourRequest extends FormRequest

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



        'libelle_concour'  => 'required | regex:/(^[A-Za-z0-9 ]+$)+/ ',
        'id_st'            => 'required',
        'date_concour'     => 'required | date',
        'heure_concour'     => 'date_format:"H:i"|required',



        ];

    }

    public function messages(){

        return[



        'libelle_concour.required'  => 'Titre du concour est obligatoire',

        'libelle_concour.regex'     => 'Le champ Titre du concour accepte que des données alphanumeric',

        'id_st.required'            => 'Ecole du concour est obligatoire',

        'date_concour.required'     => 'Date du concour est obligatoire',

        'date_concour.date'         =>  'Le champ Date du concour accepte que des données de type date',
        'heure_concour.required'    =>  'Le champ Time du concour accepte que des données de type time'



        ];

    }



}

