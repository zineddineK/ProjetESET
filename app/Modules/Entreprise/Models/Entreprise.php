<?php

namespace App\Modules\Entreprise\Models;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model {

   	public $timestamps=false;
    protected $table='entreprises';
    protected $primaryKey = 'id_entreprises';
    protected $fillable = ['libelle_entreprises','etat_supp'];

}
