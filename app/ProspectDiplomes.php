<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProspectDiplomes extends Model
{
	public $timestamps = false;
	protected $table = 'diplo_pros';
	protected $primaryKey = 'id_dp';
	protected $fillable = ['id_prospect','cne','diplome','filiere','date_obtention','etablissement_dip',
	'ville_etabli','etat_supp','note'];
}
