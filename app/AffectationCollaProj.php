<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AffectationCollaProj extends Model
{
  public $timestamps=false;
  protected $table = 'affect_colla_proj';
  protected $primaryKey = 'id_af_co_pro';
  protected $fillable = ['id_collaborateur','date_deb_proj_pros','date_fin_proj_pros','etat_supp',
  'id_proj_pros','date_ajout'];
}
