<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crmtelrdv extends Model
{
    //
	public $timestamps=false;
	protected $table='crm_tel_rdv';
	protected $primaryKey = 'id_crm_tel_rdv';
	protected $fillable = ['id_prospect','id_collaborateur','temps_app','observation','ver_email','ver_nom','ver_prenom','ver_adresse','date_ajout','etat_supp','etat_prospect','id_concour'];
}
