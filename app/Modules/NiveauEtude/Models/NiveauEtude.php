<?php

namespace App\Modules\NiveauEtude\Models;

use Illuminate\Database\Eloquent\Model;

class NiveauEtude extends Model {

    
	public $timestamps = false;

    protected $primaryKey = 'id_niveau';
    public $incrementing = false;
	public $table = 'niveau_etude';
    protected $fillable = ['libelle_niveau','etat_supp'];
}
