<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formations extends Model
{

public $timestamps = false;
  protected $table = 'formation';
  protected $primaryKey = 'id_formation';
  protected $fillable = ['libelle_formation','id_st','etat_supp'];
}
