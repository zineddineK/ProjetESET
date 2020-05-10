<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    public $timestamps=false;
	protected $table='services';
	protected $primaryKey = 'id_service';
	protected $fillable = ['libelle_service','etat_supp','date_ajout'];



}
