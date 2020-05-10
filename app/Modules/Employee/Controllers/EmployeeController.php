<?php

namespace App\Modules\Employee\Controllers;

use App\Modules\Employee\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\NiveauEtude\Models\NiveauEtude;
use App\Modules\Fonctions\Models\Fonctions;
use App\Modules\Diplome\Models\Diplome;
use App\Modules\Entreprise\Models\Entreprise;
use App\Providers\JournalisationServiceProvider;
use App\Http\Requests\CreateEmployeeRequest;
use Redirect;
use App\Structure;
use App\Service;
use App\StatutMarital;
use Session;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class EmployeeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees       = Employee::where('etat_supp',1)->latest('date_ajout')->get();
        $id_employee     = 0;
        $structures      = Structure::get(['id_st', 'abrev_st']);
        JournalisationServiceProvider::journaliser("Lister les employees");
        return view('Employee::liste_employee', compact('employees','id_employee','structures'));
        
    }

    /**
     * Show the form for creating a new resource.
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

         return view('Employee::ajouter_employee',compact('structures','niveaux', 'statuts','entreprises','diplomes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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


            Employee::create($data);
            
           
        }
        catch(\Exception $ex){

            //dd($ex);

        return Redirect::to('/employees')->with('errors', 'Employee n\'a pas été ajouté !');
        }

        JournalisationServiceProvider::journaliser("Ajout d'un employee");
        return Redirect::to('/employees')->with('status', 'Employee bien ajouté !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $employee = DB::table('employees')
            ->join('statut_marital','statut_marital.id_statut','=','employees.statut_marital')
            ->join('fonctions','fonctions.id','=','employees.fonction')
            ->join('services','services.id_service','=','employees.Service')
            ->join('structures','structures.id_st','=','employees.Structure')
            ->where('employees.id',$id)
            ->select('employees.*','statut_marital.*','fonctions.*','services.*','structures.*')
            ->first();



            $structures     =   Structure::where('etat_supp',1)->pluck('abrev_st','id_st');
            $fonctions      =   Fonctions::pluck('libelle_fonction','id');
            $services       =   Service::where('etat_supp',1)->pluck('libelle_service','id_service');

            Session::put('id_employee',$id);
           JournalisationServiceProvider::journaliser("Consulter les informations d'un employee");

        return view ('Employee::consulter_employee',compact('employee','structures','fonctions','services'));
    }

           

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $employee = DB::table('employees')
            ->join('statut_marital','statut_marital.id_statut','=','employees.statut_marital')
            ->join('fonctions','fonctions.id','=','employees.fonction')
            ->join('services','services.id_service','=','employees.Service')
            ->join('structures','structures.id_st','=','employees.Structure')
            ->where('employees.id',$id)
            ->select('employees.*','statut_marital.*','fonctions.*','services.*','structures.*')
            ->first();


            $employee1 = Employee::find($id);


            $niveaux        =   NiveauEtude::where('etat_supp',1)->pluck('libelle_niveau','id_niveau');
            $structures     =   Structure::where('etat_supp',1)->pluck('abrev_st','id_st');
            $niveaux        =   NiveauEtude::where('etat_supp',1)->pluck('libelle_niveau','id_niveau');
            $status         =   StatutMarital::pluck('libelle_statut','id_statut');
            $entreprises    =   Entreprise::where('etat_supp',1)->pluck('libelle_entreprises','id_entreprises');
            $diplomes       =   Diplome::where('etat_supp',1)->pluck('libelle_diplome','id_diplome');
            $fonctions      =   Fonctions::pluck('libelle_fonction','id');
            $services       =   Service::where('etat_supp',1)->pluck('libelle_service','id_service');


        return view('Employee::modifier_employee',compact('structures','niveaux', 'status','entreprises','diplomes','employee','fonctions','services','employee1'));
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

            $employee = Employee::findOrFail($id);

            $data = $request->all();

            if($request->hasFile('photo')){

                $name =Input::file('photo')->getClientOriginalName();
                $file = $request->file('photo')->storeAs('photos',$name);
                $files= Input::file('photo')->move('photos', $file);
                $data['photo'] = $file;
            }
        
            $employee->update($data);
            
        } 
            catch (Exception $e) {
            return Redirect::to('employees')->with('status1', 'L\'employee n\'a pas été modifié !');
        }

        JournalisationServiceProvider::journaliser("Modification d'un employee");
        return Redirect::to('/employees')->with('status', 'L\'employee a été bien modifiés !');
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

        $employee = Employee::findOrFail($id);
        Employee::find($id)->update(['etat_supp' => 0]);

          } 
        catch (\Exception $e) {
        return Redirect::to('employees')->with('status1', 'L\'employee n\'a pas été supprimé !');
            }
        return Redirect::to('employees')->with('status', 'L\'employee a été supprimer avec succès !');
    }
}
