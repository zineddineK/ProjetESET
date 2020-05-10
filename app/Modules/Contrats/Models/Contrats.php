<?php

namespace App\Modules\Contrats\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Contrats extends Model {

use SoftDeletes;

	public $timestamps=false;
	protected $dates = ['deleted_at'];
    protected $table='contrats';
    protected $primaryKey = 'contrat_id';
    protected $fillable = ['type_contrat','type_contrat_abrev','etat_supp','date_ajout'];

}
