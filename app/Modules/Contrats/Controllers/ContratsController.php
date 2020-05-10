<?php

namespace App\Modules\Contrats\Controllers;

use App\Modules\Contrats\Models\Contrats;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules;
use Carbon\Carbon;
use Session;
use Redirect;

class ContratsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrats = Contrats::all();
        $id_contrat = 0;

        return view("Contrats::liste_contrats",compact('contrats','id_contrat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Contrats::ajouter_contrat');
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
            
            Contrats::create($data);

        }catch(\Exception $ex){
            
         return Redirect::to("liste_contrats")->with('errors','Le contrat n\'a pas étè ajouté');
        }

        return Redirect::to("liste_contrats")->with('status','La contrat a étè bien modifié');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contrat = Contrats::findOrfail($id);

        return view('Contrats::modifier_contrat',compact('contrat'));
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

            $contrat = Contrats::findOrFail($id);

            $contrat->update($request->all());

        }catch(\Exception $ex){
            
            dd($ex->getMessage());

        return Redirect::to("Contrats")->with('errors','Le contrat n\'a pas étè modifié');
        }

        return Redirect::to("Contrats")->with('status','Le contrat a étè bien modifié');
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

            $contrat = Contrats::findOrfail($id);

            $contrat->delete();

        }catch(\Exception $ex){

        return Redirect::to("Contrats")->with('errors','Le contrat n\'a pas étè supprimé');
        }

        return Redirect::to("Contrats")->with('errors','Le contrat a étè supprimé');
    }
}
