<?php

namespace App\Modules\Candidat\Models;

use Illuminate\Database\Eloquent\Model;

class Candidat extends Model {

    public $timestamps=false;
    public $incrementing = false;
    protected $table='candidat';
    protected $primaryKey = 'id_candidat';
    protected $dates = ['date_de_naissance'];

    //id, date_ajout,
    protected $fillable = ['nom_candidat','prenom_candidat','email_candidat','date_de_naissance','cin',
                            'civilite','natio','id_stru','etat_supp','lieu_de_naissance','telephone_mobile','adresse',
                            'statut_marital','nbr_enfant','photo','pays_resid','ville','date_ajout',

                            //parcours scolaire
                            'niveau_etude','etablissement_dip','date_obtenation','specialite','diplome',
                            ];


        

}
