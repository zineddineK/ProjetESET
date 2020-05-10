<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Script extends Model
{
    //

  public $timestamps = false;
  protected $table = 'script';
  protected $primaryKey = 'id_script';
  protected $fillable = ['text_script','etat_supp','id_st'];
}
