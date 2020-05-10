<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concour extends Model
{
    //
  public $timestamps = false;
  protected $table = 'concours';
  protected $primaryKey = 'id_concour';
  protected $fillable = ['libelle_concour','id_st','date_concour','etat_supp','heure_concour'];
}
