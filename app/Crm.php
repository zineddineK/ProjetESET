<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Crm extends Model
{

    public $timestamps=false;
    public $incrementing = false;
  	protected $table='crm_affect_pros_collab';
  	protected $primaryKey = 'id_crm_affect';
  	protected $fillable = ['id_crm_affect','nom_crm_proj_pros','id_collaborateur','date_deb_crm','date_fin_crm','remarque_crm','etat_supp'];

}

