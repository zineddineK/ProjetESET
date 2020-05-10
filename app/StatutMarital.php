<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatutMarital extends Model
{
    public $timestamps=false;
    protected $table='statut_marital';
    protected $primaryKey = 'id_statut';
    protected $fillable = ['libelle_statut','etat_supp'];
}
