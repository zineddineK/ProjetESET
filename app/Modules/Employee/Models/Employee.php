<?php

namespace App\Modules\Employee\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

    public $timestamps=false;
    public $incrementing = false;
    protected $table='employees';
    protected $primaryKey = 'id';
    protected $dates = ['date_de_naissance'];

    //id, date_ajout,
    protected $fillable = ['nom_employee','prenom_employee','email_employee','date_de_naissance','cin',
                            'civilite','natio','id_stru','etat_supp','lieu_de_naissance','telephone_mobile','adresse',
                            'statut_marital','nbr_enfants','photo','pays_resid','ville','date_ajout','fonction','service','structure',

                            //parcours scolaire
                            'niveau_etude','etablissement_dip','date_obtenation','specialite','diplome',
                            ];

}
