<?php

namespace App\Modules\Fonctions\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fonctions extends Model {

	use SoftDeletes;
	protected $dates = ['deleted_at'];
    protected $table='fonctions';
    protected $primaryKey = 'id';

    protected $fillable = ['libelle_fonction','service_id','date_ajout'];
  


}
