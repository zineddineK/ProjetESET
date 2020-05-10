<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class serviceStructure extends Model
{
	use softDeletes;

 	public $incrementing 	= false;
 	public $dates 			= ['deleted_at'];
	protected $table		= 'service_structure';
	protected $primaryKey 	= ['service_id','structure_id'];
	protected $fillable 	= ['service_id','structure_id','date_ajout'];
}
