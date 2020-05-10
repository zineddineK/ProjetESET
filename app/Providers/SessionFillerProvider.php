<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Session;

class SessionFillerProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    static public function SessionFillerProvider($param1, $param2, $param3, $param4, $param5){

        Session::put("id_user", $param1);
        Session::put("email_user", $param2);
        Session::put("prenom_user", $param3);
        Session::put("nom_user", $param4);
        Session::put("type_user", $param5);

    }
}
