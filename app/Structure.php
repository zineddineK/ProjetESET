<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
      public $timestamps=false;
      protected $table='structures';
      protected $primaryKey = 'id_st';
      protected $fillable = [
      'nom_st','abrev_st','respon_st','num_respon_st','email_respon_st','num_cnss_st','num_rc_st','cb_st',
      'banque_st','agence_bq_st','longitude_st','latitude_st','np_st','nautor_st','dateautor_st','adresse_st',
      'site_web_st','email_st','tel_fix_st1','tel_fix_st2','num_fax_st1','num_fax_st2','desc_st',
      'de_qui_st','etat_supp','id_gr'];



}
