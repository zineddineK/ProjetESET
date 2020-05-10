<?php

namespace App\Modules\NiveauEtude\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\NiveauEtude\Models\NiveauEtude;
use Redirect;

class NiveauEtudeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch all the records from the database
        $NiveauxEtudes = NiveauEtude::all()->where('etat_supp',1);
        $id_niveau = 0;

        return view("NiveauEtude::liste_niveau",compact('NiveauxEtudes','id_niveau'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('NiveauEtude::ajouter_niveau');
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

        $data['libelle_niveau'] = strtoupper($data['libelle_niveau']);
/*
            $NiveauEtude = NiveauEtude::where('etat_supp',0)
            ->where('libelle_niveau',strtoupper($data['libelle_niveau']))
            ->first();*/

            $NiveauEtude = NiveauEtude::updateOrCreate(
                ['libelle_niveau' =>  strtoupper($data['libelle_niveau'])],
                ['etat_supp' => 1]
            );
        
/*
        if($NiveauEtude->count() > 0){

            $NiveauEtude = NiveauEtude::find($NiveauEtude->id_niveau);

            $NiveauEtude->libelle_niveau = strtoupper($data['libelle_niveau']);
            $NiveauEtude->etat_supp = 1;
            $NiveauEtude->update();
   
        }else{
            
            $niveau = new NiveauEtude;
            $niveau->libelle_niveau = strtoupper($data['libelle_niveau']);
            $niveau->save();

        }*/


            return Redirect::to('NiveauEtude')->with('status', 'Le niveau a été bien ajouté !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $niveau = NiveauEtude::find($id);

       return view('NiveauEtude::consulter_niveau',compact('niveau'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $niveau = NiveauEtude::find($id);

        return view('NiveauEtude::modifier_niveau',compact('niveau'));
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


        $niveau = NiveauEtude::findOrFail($id);
        
            try{
                    $niveau->update($request->all());
           
            }
            catch(\Exception $ex){

                return Redirect::to('NiveauEtude')->with('errors','Le niveau n\'a pas été modifié');
            }

                return Redirect::to('NiveauEtude')->with('status','Le niveau a été bien modifié');
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

            $niveau = NiveauEtude::findOrFail($id);
            $niveau->update(['etat_supp' => 0]);

    }catch(\Exception $ex){
            
        return Redirect::to('NiveauEtude')->with('errors', 'Le niveau n\'a été  supprimé !');

        }

        return Redirect::to('NiveauEtude')->with('status', 'Le niveau a été bien supprimé !');

    }

}