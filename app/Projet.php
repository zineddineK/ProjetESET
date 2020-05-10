<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
  public $timestamps=false;
  protected $table = 'projet_pros';
  protected $primaryKey = 'id_proj_pros';
  protected $fillable = ['libelle_proj_pros','activation','date_deb_proj_pros','date_fin_proj_pros','id_st','description','etat_supp'];
}
