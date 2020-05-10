<?php

namespace App\Modules\Statistiques\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Collaborateur;
use Session;
use Redirect;
use App\Prospect;
use Charts;
use App\Projet;
use App\Crmtelrdv;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Hash;

class StatistiquesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        $nbrprospects = Prospect::where('etat_supp', '=', 1) -> count();

        $nbrcollabos  = Collaborateur::where('etat_supp', '=', 1) -> count();

        $nbrapp = Crmtelrdv::where('etat_supp', '=', 1) -> count();

        $nbrprojetactife = Projet::where('etat_supp', '=', 1) -> where('activation', '=', 'activer') -> count();

        $oneCall = $twoCalls = $threeCalls = $more =  0;

        $nbrprospects = Prospect::where('etat_supp', '=', 1) -> count();

        $appelEffe = Crmtelrdv::where('etat_supp', '=', 1) -> count();
        $appelEffeL = Prospect::where('etat_supp', '=', 1) ->where('indicateur_aff', '<>', 'null')-> count();

        
        $nbrAppelParMoir = DB::select("select count(id_crm_tel_rdv) as nombre,
        MONTH(date_ajout)as mois from crm_tel_rdv where etat_supp = 1 and date_ajout < CURRENT_TIMESTAMP() group by mois");
        
        $dt = Carbon::now();


        $ta = Prospect::where('indicateur_app', '<>', 'null') -> where('etat_supp', '=', 1) 
        -> whereYear('date_ajout', '=', $dt->year) -> get();

        $tc = Prospect::where('civilite', '<>', '') -> where('etat_supp', '=', 1) 
        -> whereYear('date_ajout', '=', $dt->year) -> get();

        
        $tetab = Prospect::where('etablissement', '<>', ' ') -> where('etat_supp', '=', 1) -> whereYear('date_ajout', '=', $dt->year) -> get();

        $appeleIntce = abs($appelEffeL -  $nbrprospects);

        //count the number of occurances for each id_prospect
        $occurances = DB::select('select count(id_prospect) as count, id_prospect from  crm_tel_rdv where etat_supp = 1 group by id_prospect');

        //Associative table which allows us to map a number to the apropriate month
        $months = [0 => 'janv.',2 => 'févr.',3 => 'mars.',4 => 'avr.',5 => 'mai.',6 => 'juin.',
        7 => 'juill.',8 => 'août.',9 => 'sept.',10 => 'oct.',11 => 'nov.',12 => 'déc.'];

        //convert the array of objects returned by the query to an array
        foreach ($nbrAppelParMoir as $key => $value) {
            $count[] = $value->nombre;
            $mois[] = $value->mois;
        }

        foreach ($occurances as $key => $value) {
            $result[] = $value->count;
        }

        //increment the appropriate counters based on the value of the count
        foreach ($result as $key => $value) {
            switch ($value) {
                case 1 :
                $oneCall++;
                break;

                case 2 :
                $twoCalls++;
                break;
                
                case 3 :
                $threeCalls++;
                break;
                
                case  ($value > 3) :
                $more++;
                break;
                

                default:
                    # code...
                break;
            }
        }

        
        $tauxapp = Charts::database($ta,'bar', 'c3')
        ->title(false)
        ->elementLabel('indicateurs')
        ->groupBy('indicateur_app')
        ->labels(['Faux numéros ','Bon numéros','Pas de réponse', 'Boite vocale'])
        ->responsive(false)
        ->dimensions(0,300);


        $tauxetab = Charts::database($tetab,'bar', 'google')
        ->title(false)
        ->groupBy('etablissement')
        ->responsive(false)
        ->dimensions(1000,500);
       

        $tauxcivi = Charts::database($tc,'donut', 'c3')
         ->title(false)
         ->elementLabel('Total')
         ->groupBy('civilite')
         ->colors(['#9f5fb9','#3498db'])
         ->labels(['Masculin','Féminin'])
         ->responsive(false)
         ->dimensions(0,300);


        $app = Charts::create('donut', 'c3')
        ->title(false)
        ->labels(['Effectuées', 'Non effectuées'])
        ->values([$appelEffe,$appeleIntce])
        ->responsive(false)
        ->dimensions(0,300);


        $nbrAppel = charts::create('pie','c3')
        ->title(false)
        ->labels(['1 appel', '2 appels','3 appels','+ 3 appels'])
        ->values([$oneCall,$twoCalls,$threeCalls,$more])
        ->responsive(false)
        ->dimensions(0,300);

        /*this is a temporary hard coded solution.
        TO DO: implement this query : select count(id_crm_tel_rdv) as nombre, MONTHNAME(STR_TO_DATE(MONTH(date_ajout), '%m'))as mois from crm_tel_rdv where etat_supp = 1  group by mois;
        */

        $AppelParMois = charts::create('line','c3')
        ->title(false)
        ->labels([$months[$mois[0]],$months[$mois[1]],$months[$mois[2]],$months[$mois[3]]])
        ->values([$count[0],$count[1],$count[2],$count[3]])
        ->responsive(false)
        ->dimensions(0,300);


        return view("Statistiques::statistiques",compact('tauxetab','tauxcivi','nbrprospects', 'nbrcollabos', 'nbrapp', 
        'nbrprojetactife','AppelParMois','nbrAppel','appelEffe','app','appeleIntce','tauxapp','test'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
