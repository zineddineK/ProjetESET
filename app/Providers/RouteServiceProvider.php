<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->statistiqueWebRoutes();

 //       $this->statistiqueApiRoutes();

        $this->formationWebRoutes();

//        $this->formationApiRoutes(); //j'ai désactivé a cause de perte de session 

    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }


    //Statistique routes

      protected function statistiqueWebRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => 'App\Modules\Statistiques\Controllers',
        ], function ($router) {
            require base_path('App\Modules\Statistiques\routes\web.php');
        });
    }

/*
      protected function statistiqueApiRoutes()
    {
        Route::group([
            'middleware' => 'api',
            'namespace' => 'App\Modules\Statistiques\Controllers',
        ], function ($router) {
            require base_path('App\Modules\Statistiques\routes\api.php');
        });
    }
*/


    //Formation routes

    protected function formationWebRoutes()     
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => 'App\Modules\Pedagogique\Formation\Controllers',
        ], function ($router) {
            require base_path('App\Modules\Pedagogique\Formation\routes\web.php');
        });
    }
    //employe routes

    

/*
    protected function formationApiRoutes()
    {
        Route::group([
            'middleware' => 'api',
            'namespace' => 'App\Modules\Pedagogique\Formation\Controllers',
        ], function ($router) {
            require base_path('App\Modules\Pedagogique\Formation\routes\api.php');
        });
    }

*/  
}
