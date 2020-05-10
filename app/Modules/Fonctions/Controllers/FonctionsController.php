<?php

namespace App\Modules\Fonctions\Controllers;

use App\Http\Request\CreateFonctionRequest;
use App\Modules\Fonctions\Models\Fonctions;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Structure;
use App\Service;
use Session;
use Redirect;
use DB;


class FonctionsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $fonctions = DB::table('fonctions')
        ->join('services','fonctions.service_id','=','services.id_service')
        ->select('fonctions.*','services.libelle_service')
        ->where('etat_supp',1)
        ->get();
        
        $id_fonction = 0;

        return view("Fonctions::liste_fonction",compact('fonctions','id_fonction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $structures = Structure::pluck('abrev_st','id_st');

        return view('Fonctions::ajouter_fonction',compact('structures'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);


            $data = array_add($data,'date_ajout',Carbon::now());

        try{
            
            Fonctions::create($data);

        }catch(\Exception $ex){

         return Redirect::to("liste_fonction")->with('errors','La fonction n\'a pas étè ajoutée');
        }

        return Redirect::to("liste_fonction")->with('status','La fonction a  étè bien modifiée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fonction  = Fonctions::find($id);

        return view('Fonctions::consulter_fonction',compact('fonction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fonction1 = Fonctions::findOrFail($id);

        $fonction = DB::table('fonctions')
        ->join('services','fonctions.service_id','=','services.id_service')
        ->join('service_structure','service_structure.service_id','=','services.id_service')
        ->where('fonctions.id','=',$id)
        ->select('fonctions.*','services.libelle_service')
        ->first();

        //dd($fonction);

        $services = Service::pluck('libelle_service','id_service');
        $structures = Structure::pluck('abrev_st','id_st');
        
        return view('Fonctions::modifier_fonction',compact('fonction','structures','services','fonction1'));
    
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
        $data = $request->except(['_token']);

        try{

            $fonction = Fonctions::findOrFail($id);

            $fonction->update($request->all());

        }catch(\Exception $ex){
            
            dd($ex->getMessage());

        return Redirect::to("fonctions")->with('errors','La fonction n\'a pas étè modifiée');
        }

        return Redirect::to("fonctions")->with('status','La fonction a étè bien modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        try{

        $fonction = Fonctions::find($id);
        

        $function->delete();

    }catch(\Exception $ex){
    
        return Redirect::to("fonctions")->with('errors','La fonction n\'a pas étè supprimeé');
        }

        return Redirect::to("fonctions")->with('status','La fonction n\'a pas étè bien supprimeé');

    }
 
    public function getService($stru_id)
    {
        $structure = structure::find($stru_id);

        $services = $structure->services;

        return response()->json($services);
    }

    public function getFonctions($service_id)
    {
        //$fonctions = Fonctions::where('service_id',$service_id);

        $fonctions = DB::table('fonctions')
        ->join('services','fonctions.service_id','=','services.id_service')
        ->where('fonctions.service_id',$service_id)
        ->select('fonctions.*')
        ->get();

        return response()->json($fonctions);
    }
}
