<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RdvConcour extends Model
{
    public $timestamps=false;
	protected $table='rdv_concours_pros_colla';
	protected $primaryKey = 'id_rdv_con';
	protected $fillable = ['id_collaborateur','etat_supp','id_prospect','id_concour','date_ajout'];

}
