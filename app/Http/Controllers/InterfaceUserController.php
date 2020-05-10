<?php

namespace App\Http\Controllers;



use App\Providers\JournalisationServiceProvider;

use App\Providers\SessionFillerProvider;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Routing\Controller as BaseController;

use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Foundation\Bus\DispatchesJobs;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use DB;

use App\Users;

use App\Collaborateur;

use Session;

use Redirect;

use App\Prospect;

use App\Crmtelrdv;

use App\Projet;

use Charts;

use Carbon\Carbon;


class InterfaceUserController extends Controller

{


	public function login(Request $req)

	{

		$login = $req->input('t1');

		$pwd = $req->input('t2');

		$collabo = DB::table('collaborateur')->where(['email_colla' => $login])->first();

		$user = DB::table('presi_gen')->where(['email_presi_gen_user' => $login])->first();


    //dd(hash::check($pwd, $user->pwd_presi_gen));


		if( (count($collabo) > 0)  ){


			$email_user = $collabo ->email_colla;

			$prenom_user= $collabo->nom_colla;

			$nom_user= $collabo ->prenom_colla;

			$id_user= $collabo ->id_collaborateur;

			$type="collabo";


			SessionFillerProvider::SessionFillerProvider($id_user, $email_user, $prenom_user, $nom_user,$type);

			JournalisationServiceProvider::journaliser("Connection à l'application : ".$nom_user);

		}



		if((count($user) > 0) && md5($pwd) == ($user->pwd_presi_gen)){


			$email_user= $user->email_presi_gen_user;

			$prenom_user= $user->nom_presi_gen_user;

			$nom_user= $user->prenom_presi_gen_user;

			$id_user= $user->id_presi_gen_user;

			$type="admin";



			SessionFillerProvider::SessionFillerProvider($id_user, $email_user, $prenom_user, $nom_user,$type);

			JournalisationServiceProvider::journaliser("Connection à l'application : ".$nom_user);



		} else {

			return back()->withErrors(['Authentification incorrecte vérifier vos informations']);

		}


		return redirect('/acceuil');

	}



	public function acceuil()
	{
							 

		return view('acceuil.acceuil',compact('nbrprospects', 'nbrcollabos', 'nbrapp', 'nbrprojetactife', 'tauxapp', 'tauxcivi', 
			'tauxok'));
	}



	public function logout(){

		Session::flush();

		return redirect('/');

	}



}

