<?php

namespace App\Modules\Certificat\Models;

use Illuminate\Database\Eloquent\Model;

class Certificat extends Model {

    public $timestamps=false;
    protected $table='certificats';
    protected $primaryKey = 'id_certificats';
    protected $fillable = ['libelle_entreprises','etat_supp'];

}
