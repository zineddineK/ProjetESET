<?php

namespace App\Modules\Diplome\Models;

use Illuminate\Database\Eloquent\Model;

class Diplome extends Model {

    public $timestamps=false;
    public $incrementing = false;
    protected $table='diplomes';
    protected $primaryKey = 'id_diplome';

    protected $fillable = ['etat_supp','date_ajout','libelle_diplome','id_niveau'];
}
