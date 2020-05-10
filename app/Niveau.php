<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    public $timestamps=false;
    protected $table='niveau_etude';
    protected $primaryKey = 'id_niveau';
    protected $fillable = ['libelle_niveau','etat_supp'];
}
