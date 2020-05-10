<?php

namespace App\Modules\Diplome\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Diplome\Models\Diplome;
use App\Http\Request\CreateDiplomeRequest;
use App\Modules\NiveauEtude\Models\NiveauEtude;
use Redirect;
use Session;
use DB;

class DiplomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Diplomes = Diplome::all()->where('etat_supp',1);
        $id_diplome = 0;

        return view("Diplome::liste_diplome",compact('Diplomes','id_diplome'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $niveaux        = NiveauEtude::pluck('libelle_niveau','id_niveau');
        return view('Diplome::ajouter_diplome',compact('niveaux'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->except(['_method', '_token']);
        try {

            Diplome::create($data);
            
        } catch (\Exception $ex) {
            dd($ex->getMessage());
            
        }
        //JournalisationServiceProvider::journaliser("Ajout d'une Entreprise");
        return Redirect::to('liste_diplome')->with('status', 'Diplôme bien ajoutée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         //$diplome = Diplome::findOrFail($id);
         $diplome = DB::table('diplomes')
         ->join('niveau_etude','niveau_etude.id_niveau','=','diplomes.id_niveau')
         ->select('diplomes.*','niveau_etude.libelle_niveau')
         ->get()
         ->first();
         
       return view('Diplome::consulter_diplome',compact('diplome'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diplome = Diplome::find($id);

        return view('Diplome::modifier_diplome',compact('diplome'));
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
        $diplome = Diplome::findOrFail($id);
        
            try{
                    $diplome->update($request->all());
           
            }
            catch(\Exception $ex){

                return Redirect::to('liste_diplome')->with('errors','Le diplôme n\'a pas été modifié');
            }

                return Redirect::to('liste_diplome')->with('status','Le diplôme a été bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{

            $diplome = Diplome::findOrFail($id);
            $diplome->update(['etat_supp' => 0]);

    }catch(\Exception $ex){
            
        return Redirect::to('liste_diplome')->with('errors', 'Le diplôme n\'a été  supprimé !');

        }

        return Redirect::to('liste_diplome')->with('status', 'Le diplôme a été bien supprimé !');
    }

    /*public function search()
    {
        $diplome = Diplome::where('id_diplome', request()->id)->first();
        
        if(is_null($profile)){
            return Response::json('error');
        }else{
            return Response::json('success');
        }
    }*/
}
