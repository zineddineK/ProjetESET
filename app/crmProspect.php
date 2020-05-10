<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crmProspect extends Model
{
    public $timestamps=false;
  	protected $table='crm_prospect';
  	protected $primaryKey = 'id_crm_pros';
  	protected $fillable = ['id_proj_pros','nom_crm_proj_pros','id_crm_affect','id_pros','date_ajout',
  	'id_collaborateur','etat_supp'];
}
