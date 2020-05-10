<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
  public $timestamps=false;
	protected $table='groupe';
	protected $primaryKey = 'id_gr';
	protected $fillable = ['libelle_gr','etat_supp','description_gr','abreviation','telephone_fixe_gr',
  'adresse','email_gr','responsable_gr'];

}
