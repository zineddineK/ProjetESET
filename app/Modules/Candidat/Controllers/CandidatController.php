<?php

namespace App\Modules\Candidat\Controllers;

use App\Providers\JournalisationServiceProvider;
use App\Modules\NiveauEtude\Models\NiveauEtude;
use App\Modules\Entreprise\Models\Entreprise;
//use App\Http\Requests\CreateEmployeeRequest;
use App\Http\Requests\CreateCandidatRequest;
use App\Modules\Candidat\Models\Candidat;
use App\Modules\Employee\Models\Employee;
use App\Modules\Diplome\Models\Diplome;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\StatutMarital;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Structure;
use Redirect;
use Session;
use DB;


class CandidatController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        public function index()
    {

        /*$diplomes = DB::table('diplomes')

      ->join('diplomes','niveau_etude.id_niveau', '=','diplomes.id_niveau')

      ->where('id_niveau','=',17)

      ->get();

      dd($diplomes);*/

        //$diplomes        =Diplome::where('etat_supp',1)->latest('date_ajout')->get();
        $candidats       = Candidat::where('etat_supp',1)->latest('date_ajout')->get();
        $id_candidat     = 0;
        $structures      = Structure::get(['id_st', 'abrev_st']);
        JournalisationServiceProvider::journaliser("Lister les candidats");
        return view('Candidat::liste_candidat', compact('candidats','id_candidat','structures'));

    }

    /**
     * Show the form for creating a new resource
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

            $structures     =   Structure::where('etat_supp',1)->pluck('abrev_st','id_st');
            $niveaux        =   NiveauEtude::where('etat_supp',1)->pluck('libelle_niveau','id_niveau');
            $statuts        =   StatutMarital::pluck('libelle_statut','id_statut');
            $entreprises    =   Entreprise::where('etat_supp',1)->pluck('libelle_entreprises','id_entreprises');
            $diplomes       =   Diplome::where('etat_supp',1)->pluck('libelle_diplome','id_diplome');

         return view('Candidat::ajouter_candidat',compact('structures','niveaux', 'statuts','entreprises','diplomes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCandidatRequest $request)
    {

        try{

            $data       = $request->except(['_method', '_token']);

            $date_ajout = Carbon::now();
           
            $data       = array_add($data,'date_ajout',$date_ajout);
            
            if($request->hasFile('photo')){

                $name =Input::file('photo')->getClientOriginalName();
                $file = $request->file('photo')->storeAs('photos',$name);
                $files= Input::file('photo')->move('photos', $file);
                $data['photo'] = $file;
            }


            Candidat::create($data);

           
        }
        catch(\Exception $ex){

        return Redirect::to('/candidats')->with('status1', 'Candidat n\'a pas été ajouté !');
        }

        JournalisationServiceProvider::journaliser("Ajout d'un candidat");
        return Redirect::to('/candidats')->with('status', 'Candidat bien ajouté !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $candidat = Candidat::findOrFail($id);

        
           $candidat     = DB::table('candidat')
         //    ->join('niveau_etude','niveau_etude.id_niveau','=','candidat.niveau_etude')
             ->join('statut_marital','statut_marital.id_statut','=','candidat.statut_marital')
        //     ->join('certificats','certificats.id_candidat','=','candidat.statut_marital')
        //  ->join('entreprises','entreprises.id_entreprises','=','certificats.id_entreprise')
        //     ->join('entreprises','entreprises.id_entreprises','=','condidat.entreprises')
        //     ->join('diplomes','diplomes.id')
             ->where('id_candidat',$id)
             ->select('statut_marital.*','candidat.*')
             ->first();

           Session::put('id_candidat',$id);
           JournalisationServiceProvider::journaliser("Consulter les informations d'un candidat");
           return view('Candidat::consulter_candidat',['candidat' => $candidat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

            $candidat       =   Candidat::findOrFail($id);
            $niveaux        =   NiveauEtude::where('etat_supp',1)->pluck('libelle_niveau','id_niveau');
            $structures     =   Structure::where('etat_supp',1)->pluck('abrev_st','id_st');
            $niveaux        =   NiveauEtude::where('etat_supp',1)->pluck('libelle_niveau','id_niveau');
            $status         =   StatutMarital::pluck('libelle_statut','id_statut');
            $entreprises    =   Entreprise::where('etat_supp',1)->pluck('libelle_entreprises','id_entreprises');
            $diplomes       =   Diplome::where('etat_supp',1)->pluck('libelle_diplome','id_diplome');


        return view('Candidat::modifier_candidat',compact('structures','niveaux', 'status','entreprises','diplomes','candidat'));

        
        /*$structures     = Structure::pluck('abrev_st','id_st');

        
            ->join('structures','structures.id_st','=','candidat.id_stru')
            ->join('niveau_etude','niveau_etude.id_niveau','=','candidat.niveau_etude')
            ->join('entreprises','certificats.id_entreprise','=','entreprises.id_entreprises')
            
              

            dd($candidat);
                
        return view('Candidat::modifier_candidat', 
            [
            'candidat'       => $candidat,
            'structures'    => $structures,
            ]);
*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {

            $candidat = Candidat::findOrFail($id);

            $data = $request->all();


            if($request->hasFile('photo')){

                $name =Input::file('photo')->getClientOriginalName();
                $file = $request->file('photo')->storeAs('photos',$name);
                $files= Input::file('photo')->move('photos', $file);
                $data['photo'] = $file;
            }
        
            $candidat->update($data);
            
        } 
            catch (Exception $e) {
            return Redirect::to('candidats')->with('status1', 'L\'candidat n\'a pas été modifié !');
        }

        JournalisationServiceProvider::journaliser("Modification d'un candidat");
        return Redirect::to('/candidats')->with('status', 'Le candidat a été bien modifiés !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      try {

        $candidat=Candidat::findOrFail($id);
        Candidat::find($id)->update(['etat_supp' => 0]);

          } 
        catch (\Exception $e) {
        return Redirect::to('candidats')->with('status1', 'Le candidat n\'a pas été supprimé !');
            }   
        return Redirect::to('candidats')->with('status', 'Le candidat a été supprimer avec succès !');
    }


     public function confirmerAffectation($id)
     {


           $candidat     = DB::table('candidat')
            ->join('statut_marital','statut_marital.id_statut','=','candidat.statut_marital')
             ->where('id_candidat',$id)
             ->select('statut_marital.*','candidat.*')
             ->first();


            $niveaux        =   NiveauEtude::where('etat_supp',1)->pluck('libelle_niveau','id_niveau');
            $status         =   StatutMarital::pluck('libelle_statut','id_statut');
            $entreprises    =   Entreprise::where('etat_supp',1)->pluck('libelle_entreprises','id_entreprises');
            $diplomes       =   Diplome::where('etat_supp',1)->pluck('libelle_diplome','id_diplome');

            $structures     =   Structure::where('etat_supp',1)->pluck('abrev_st','id_st');
            

        return view('Candidat::confirmer_affectation',compact('structures','niveaux', 'statuts','status','diplomes','entreprises','candidat'));
     }


     public function affecter(Request $request)
     {


            $data       = $request->except(['_method', '_token']);

            $date_ajout = Carbon::now();
           
            $data       = array_add($data,'date_ajout',$date_ajout);

            if($request->hasFile('photo')){

                $name =Input::file('photo')->getClientOriginalName();
                $file = $request->file('photo')->storeAs('photos',$name);
                $files= Input::file('photo')->move('photos', $file);
                $data['photo'] = $file;
            
            }

            try {


        Candidat::find($data['id_employee'])->update(['etat_supp' => 0]);
        Employee::create($data);

          } 

        catch (\Exception $e) {
            dd($e);
        return Redirect::to('candidats')->with('status1', 'Le candidat n\'a pas été affecter !');

            }
        return Redirect::to('candidats')->with('status', 'Le candidat a été affecter avec succès !');
     }


    public function search()
    {
        $id_niveau=Input::get('id_niveau');

        $diplomes = DB::table('diplomes','niveau_etude')

          ->join('diplomes','niveau_etude.id_niveau', '=','diplomes.id_niveau')

          ->where('id_niveau','=',$id_niveau)

          ->get();


      return Response::json($diplomes);

    }

    
}
