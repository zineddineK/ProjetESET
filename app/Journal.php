<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $table = 'journal';
    protected $primaryKey = 'id_j';
    protected $fillable = ['nom_prenom_u','user_j','action_j','description'];
}
