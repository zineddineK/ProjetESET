<?php

namespace App\Modules\Specialite\Models;

use Illuminate\Database\Eloquent\Model;

class Specialite extends Model {

    public $timestamps = false;

    protected $primaryKey = 'id_specialte';
    public $incrementing = false;
	public $table = 'Specialite';
    protected $fillable = ['libelle_specialte','etat_supp'];

}
