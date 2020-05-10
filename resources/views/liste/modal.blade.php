<form action="/appel_terminer" method="post"  id="validate">

  {{ csrf_field() }}

  <div class="modal-header" style="background: #3f7f73;">



    <div class="row">

      <div class="col-md-5">

        <h1 class="modal-title" id="myModalLabel" style="color:#fff">Prise de rendez-vous</h1>

      </div>

      <div class="col-md-4" style="">

        <div class="text-center " >

          <span class="section" style="margin-bottom:6px; color:#fff">Etat d'appel :</span>

          <label class="radio-inline" style=" font-size:20px;"><input type="radio" class="etat"  name="etat" id="ok" value="ok" >



            OK

          </label>

          <label style=" font-size:20px;" class="radio-inline"><input type="radio" class="etat" name="etat" id="pr" value="pr" >



            P.R

          </label>

          <label class="radio-inline" style="  font-size:20px;"><input type="radio" class="etat" name="etat" id="bv" value="bv" >





            B.V

          </label>

          <label style="  font-size:20px;"  class="radio-inline"><input type="radio" class="etat" name="etat" id="fn" value="fn">

            F.N

          </label>



        </div>



      </div>

      <div class="col-md-3">

        <input type="text" class="pull-right text-center counter"  id="compteur"  name="temps_app" value="00 : 00">

      </div>

    </div>

  </div>

  <div class="modal-body">

    <div class="row">

      <div class="col-md-8">

        <div class="row info" style="background:#fff;">



          <div class="col-md-12">

            <div class="col-md-12">

              <div class="col-md-6">

                <span class="section" style="margin-bottom:0px; margin-top:10px;   margin-left: -16px;">Informations Personnelles : </span>

              </div>

              <div class="col-md-6 ">

                <h1 class="tel pull-right" >{{implode(" ", str_split($prospect->telephone_mobile, 2))}}</h1>

                <input type="text" name="id_prospect" value="{{$prospect->id_prospect}}" hidden>

                <input type="text" name="crm" value="{{$crm}}" hidden>

              </div>

            </div>

            <div class="col-md-6">

             <span class="content"> <input name="ver_nom" type="checkbox"  checked >  Nom  :



              <span class="value">{{$prospect->nom}}</span>

            </span>



          </div>

          <div class="col-md-6">

            <span class="content"><input name="ver_prenom" type="checkbox" checked="true"  >Prenom :<span  class="value"> {{$prospect->prenom}}</span ></span>

          </div>

          <div class="col-md-6">

            <span class="content"><input name="email" type="checkbox" checked="true" > Email :<span class="value" > {{$prospect->e_mail}} </span ></span>

          </div>

          <div class="col-md-6">

           <span class="content"><input name="ver_adresse" type="checkbox" checked="true" > Ville : <span  class="value"> {{$prospect->ville}}</span ></span>

         </div>

       </div>

     </div>

     <div class="row etude" >

      <span class="section" style="margin-bottom:0px; margin-top:10px;   margin-left: 16px;">Etudes :</span>

      <div class="col-md-12">



        <table class="table table-condensed table-bordered" style="margin-top:20px;">

          <thead style="background-color:#ECEFF1">

            <th class="col-md-2">Diplôme</th>

            <th class="col-md-5">Filière</th>

            <th class="col-md-3">Date d'Obtention</th>

            <th class="col-md-2">Moyenne Générale</th>

          </thead>

          <tbody>

            @if(count($prospDipl) == 2)

            @foreach ($prospDipl as $prospDipl)

            <tr>

              <td><input type="text" class="form-control" name="diplome[]" value="{{$prospDipl->diplome}}"></td>

              <td><input type="text" class="form-control" name="filiere[]" value="{{$prospDipl->filiere}}"></td>

              <td><input type="number" min="1988" max="<?php echo date("Y");?>" class="form-control" name="date_obtention[]" value="{{$prospDipl->date_obtention}}"></td>

              <td><input type="text" class="form-control" id="note" name="note[]" value="{{$prospDipl->note}}"></td>

            </tr>

            @endforeach

            @elseif (count($prospDipl) == 1)

            <tr>

              <td><input type="text" class="form-control" name="diplome[]" value="{{$prospDipl[0]->diplome}}"></td>

              <td><input type="text" class="form-control" name="filiere[]" value="{{$prospDipl[0]->filiere}}"></td>

              <td><input type="number" min="1988" max="<?php echo date("Y");?>" class="form-control" name="date_obtention[]" value="{{$prospDipl[0]->date_obtention}}"></td>

              <td><input type="text" class="form-control"   id="note" name="note[]" value="{{$prospDipl[0]->note}}"></td>

            </tr>



            <tr>

              <td><input type="text" class="form-control" name="diplome[]" value=""></td>

              <td><input type="text" class="form-control" name="filiere[]" value=""></td>

              <td><input type="number" min="1988" max="<?php echo date("Y");?>" class="form-control" name="date_obtention[]" value=""></td>

              <td><input type="text" class="form-control"  id="note" name="note[]" value=""></td>

            </tr>

            

            @else

            <tr>

              <td><input type="text" class="form-control" name="diplome[]" value=""></td>

              <td><input type="text" class="form-control" name="filiere[]" value=""></td>

              <td><input type="number" min="1988" max="<?php echo date("Y");?>" name="date_obtention[]" value=""></td>

              <td><input type="text" class="form-control"  id="note" name="note[]" value=""></td>

            </tr>

            <tr>

              <td><input type="text" class="form-control" name="diplome[]" value=""></td>

              <td><input type="text" class="form-control" name="filiere[]" value=""></td>

              <td><input type="number" min="1988" max="<?php echo date("Y");?>" name="date_obtention[]" value=""></td>

              <td><input type="text" class="form-control" id="note"  name="note[]" value=""></td>

            </tr>

            @endif





          </tbody>

        </table>

      </div>

    </div>

    <div class="row concour">

      <span class="section" style=" margin-top:10px;   margin-left: 16px;">Test d'Admission :</span>

      <div class="col-md-12">

        <div class="col-md-6">

          <div class="col-md-12" style="">

            <select class="form-control" name="struc_choice" id="structure">

              <option selected="true" disabled="disabled">Choisissez une ecole</option>

              @foreach($structures as $structures)

              <option value="{{$structures->id_st}}">{{$structures->abrev_st}}</option>

              @endforeach

            </select>

          </div>

          <div class="col-md-12" style="margin-top:10px;">

            <select class="form-control" name="form_choice" id="formation">

              <option selected="true" disabled="disabled">Choisissez une formation</option>



            </select>

          </div>

        </div>

        <div class="col-md-6">

          <div class="col-md-12">

            <select class="form-control" name="concour">
               <option selected="true" value="000000" >Choisissez un concour</option>
              @foreach ($concour as $concour)

              <option value="{{$concour->id_concour}}">{{$concour->libelle_concour}}</option>

              @endforeach

            </select>

          </div>

          <div class="form-group rdv_test">

            <label class="radio-inline"><input type="radio" value="oui" class="resultat"  name="resultat" >



              Oui

            </label>

            <label class="radio-inline"><input type="radio" value="non" class="resultat"  name="resultat">



              Non

            </label>

            <label class="radio-inline"><input type="radio" value="empechement" class="resultat"  name="resultat" >



              Empechement

            </label>

          </div>

        </div>

      </div>

    </div>

    <div class="row" style="margin-top:10px;">

      <div class="col-md-12">

        <span class="section">Observation :</span>

        <textarea name="observation" class="obs_area"rows="8" cols="80" style="border-radius:10px;margin-top: -14px;"></textarea>

      </div>

    </div>

  </div>

  <div class="col-md-4 script">

    <span class="section">Script :</span>

    <textarea name="name" rows="8" cols="80" style="width:100%; height:610px; border-radius:10px;" disabled> Bonjour 

      C’est ....... du Groupe Léonard De Vinci - C’est bien … ?  



      Enchanté 



      On a reçu une demande d’inscription sur notre site, concernant les classes prépas / Management / Génie Informatique 

      E-mail

      Ville

      Type de Bac

      Série de Bac

      Année d'optention 

      Moyenne Générale 





      Donc, le test d’admission c’est le ........................... 



      Le dernier délai du dépôt de dossier c’est le ....................... avant 15h



      Sinon, exceptionnellement, vous pouvez déposer votre dossier de candidature 1 heure avant les tests (9h)



      Pour passer le test, il faut ramener les pièces suivantes :



      * Relevé de notes : 

      - Tronc commun 

      - 1 année et 2 année Bac

      * Copie du bac legalisée

      * Copie CIN

      * 1 Photos

      * 1 Acte de naissance

      * 250 dh de Frais de test





      Epreuves du test :

      * CPGE : 

      - ECRIT : Anglais - Français - Maths

      - ORAL : Culture générale



      * ISMAG : 

      - 1ère année Management

      x ECRIT : Anglais - Français

      x ORAL : Culture générale



      - 3ème année Management

      x ECRIT : Anglais - Français - Economie

      x ORAL : Culture générale



      - 1ère année Informatique

      x ECRIT : Mathématique - Logique

      x ORAL : Culture générale



      - 3ème année Informatique

      x ECRIT : Français - Mathématique - Logique

      x ORAL : Culture générale





      Adresse : 28, Rue Oujda , Quartier Hassan



      Tel : 05 37 72 04 00



      Remerciements 

    </textarea>

  </div>

</div>

<div class="modal-footer">

  <input type="submit" class="btn btn-success pull-right" name="" value="Envoyer">

</div>

</form>

<script type="text/javascript">

//if ($('#structure').length>0){



  $('#structure').on('change',function(e){



    console.log(e);

    var stru_id = e.target.value;



    $.get('/ajax-form/'+ stru_id, function(data){

      $('#formation').empty();

      $('#formation').append('<option selected="true" disabled="disabled">Choisissez une formation</option>');

      console.log(data);

      $.each(data, function(index, formation){

        $('#formation').append('<option required="required" value="'+formation.id_formation+'">'+formation.libelle_formation+'</option>');



      });

    });

  });



  $('#validate').submit(function (e) {



   if (!$('.etat').is(':checked')) {



     e.preventDefault();

     alert('Veuillez svp cocher etat d\'appel');

   }else if(!$('.resultat').is(':checked')){

     e.preventDefault();

     alert('Veuillez svp cocher etat de rendez vous');

   }

   

 })



//}else{

//  console.log("this is else!");

//}

</script>

