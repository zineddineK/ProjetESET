<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
use Session;


class JournalisationServiceProvider extends ServiceProvider
{

    public static function journaliser($message)
    {
        $datajournal = array("nom_prenom_u"=>Session::get('prenom_user')." ".Session::get('nom_user'),"user_j"=>Session::get('email_user'),
            "action_j"=>$message);
        DB::table('journal')->insert($datajournal);
    }

}
