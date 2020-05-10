<?php

namespace App\Modules\Pedagogique\Formation\Models;

use Illuminate\Database\Eloquent\Model;

class Formations extends Model {

    public $timestamps = false;
  protected $table = 'formations';
  protected $primaryKey = 'id_formation';
  protected $fillable = ['libelle_formation','id_st','etat_supp'];

}