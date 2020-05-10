<?php

namespace App\Modules\Entreprise\Controllers;

use Illuminate\Http\Request;
use App\Modules\Entreprise\Models\Entreprise;
use App\Http\Controllers\Controller;
use App\Http\Request\CreateEntrepriseRequest;
use Redirect;
use Session;
use DB;

class EntrepriseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Entreprises       = Entreprise::where('etat_supp',1)
        ->latest('date_ajout')
        ->get();


        $id_entreprises    = 0;
        //JournalisationServiceProvider::journaliser("Lister les entreprises");
        return view('Entreprise::liste_entreprise', compact('Entreprises','id_entreprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Entreprise::ajouter_entreprise');
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

            Entreprise::create($data);
            
        } catch (\Exception $ex) {
            
        return Redirect::to('liste_entreprise')->with('erros', 'Entreprise n\' pas été ajoutée !');
            
        }
        //JournalisationServiceProvider::journaliser("Ajout d'une Entreprise");
        return Redirect::to('liste_entreprise')->with('status', 'Entreprise bien ajoutée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entreprise = Entreprise::findOrFail($id);

        return view ('Entreprise::consulter_entreprise',compact('entreprise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entreprises = Entreprise::find($id);
        return view('Entreprise::modifier_entreprise',compact('entreprises'));
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
        $data = $request->all();
        try{
                $entreprises = Entreprise::findOrFail($id);
                $entreprises->update($data);
            
            }catch(\Exception $ex){
                    //return fail
            return Redirect::to('liste_entreprise')->with('status1', 'L\'entreprise n\'a pas été modofié !');
            }

            //return success
            return Redirect::to('liste_entreprise')->with('status', 'L\'entreprise a été modofié avec succès !');    
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
        $entreprise=Entreprise::findOrFail($id);
        Entreprise::find($id)->update(['etat_supp' => 0]);
          } 
        catch (\Exception $e) {
        return Redirect::to('liste_entreprise')->with('status1', 'L\'entreprise n\'a pas été supprimé !');
            }
        return Redirect::to('liste_entreprise')->with('status', 'L\'entreprise a été supprimé avec succès !');    }
}
