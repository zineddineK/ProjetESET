@extends('layouts.entete_amd')

@section('content')



<div class="right_col" role="main" style="min-height: 949px;">

  <div class="">

    <div class="page-title">

      <div class="col-md-12 col-sm-12 col-xs-12">

        <h3>Modifier une demande d'admission</h3>

      </div>

    </div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="x_panel">

          <div class="animate x_conten">

            {!! Form::open(['method' => 'PATCH', 'class' => 'form-horizontal']) !!}

            {{ csrf_field() }}

            <blockquote><i>Veuillez saisire toutes les informations qui concerne cette demande d'admission</i></blockquote>

            <span class="section">Les informations personnelles</span>

            <div class="item form-group">

              {!! Form::label('inputname', 'civilite *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

              <div class="col-md-6 col-sm-6 col-xs-12 ">

                @if($prospect->civilite === "M")

                {!! Form::radio('civilite', "M", true) !!} M. <br/>

                {!! Form::radio('civilite', 'F') !!} Mme.

                @else

                {!! Form::radio('civilite', 'F',true) !!} M.

                {!! Form::radio('civilite', "M") !!} Mme. <br/>

                @endif

              </div>

            </div>

            <div class="item form-group">

              {!! Form::label('inputname', 'Nom *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

              <div class="col-md-6 col-sm-6 col-xs-12">

                {!! Form::text('nom', $prospect -> nom, ['class' => 'form-control col-md-7 col-xs-12',  'placeholder' => 'Entrez votre nom']) !!}

              </div>

            </div>

            <div class="item form-group">

              {!! Form::label('inputname', 'Prenom *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

              <div class="col-md-6 col-sm-6 col-xs-12">

                {!! Form::text('prenom', $prospect -> prenom, ['class' => 'form-control col-md-7 col-xs-12',   'required' => 'required', 'placeholder' => 'Entrez votre prenom']) !!}

              </div>

            </div>

            <div class="item form-group">

              {!! Form::label('inputname','N° Passeport (Etudiant Etranger) ', ['class'=> 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

              <div class="col-md-6 col-sm-6 col-xs-12">

                {!! Form::text('n_pass', $prospect -> n_pass, ['class' => 'form-control col-md-7 col-xs-12',   'placeholder' => ' N° Passeport'] ) !!}

              </div>

            </div>

            <div class="item form-group">

              {!! Form::label('inputname','N° C.I.N *', ['class'=> 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

              <div class="col-md-6 col-sm-6 col-xs-12">

                {!! Form::text('cin', $prospect -> cin, ['class' => 'form-control col-md-7 col-xs-12',     'required' => 'required', 'placeholder' => 'Entrez votre N° C.I.N'] ) !!}

              </div>

            </div>

            <div class="item form-group">

              {!! Form::label('inputname', 'Date de naissance *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

              <div class="col-md-6 col-sm-6 col-xs-12">

                {!! Form::date('date_de_naissance', $prospect -> date_de_naissance, ['class' => 'form-control col-md-7 col-xs-12',  'required' => 'required', 'placeholder' => 'Date de naissance']) !!}

              </div>

            </div>

            <div class="item form-group">

              {!! Form::label('inputname', 'Nationalité *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

              <div class="col-md-6 col-sm-6 col-xs-12">

               {!! Form::text('nationalite', $prospect -> nationalite, ['class' => 'form-control col-md-7 col-xs-12',   'required' => 'required','placeholder' => 'nationalite']) !!}

             </div>

           </div>

           <div class="item form-group">

            {!! Form::label('inputname', 'Lieu de naissance * ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

            <div class="col-md-6 col-sm-6 col-xs-12">

              {!! Form::text('lieu_de_naissance', $prospect -> lieu_de_naissance, ['class' => 'form-control col-md-7 col-xs-12',   'required' => 'required','placeholder' => 'Lieu de Naissance']) !!}

            </div>

          </div>

          <span class="section">Contacts :</span>

          <div class="item form-group">

            {!! Form::label('inputname', 'Adresse E-mail *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

            <div class="col-md-6 col-sm-6 col-xs-12">

              {!! Form::text('e_mail', $prospect -> e_mail, ['class' => 'form-control col-md-7 col-xs-12',   'required' => 'required', 'placeholder' => 'Votre E-mail']) !!}

            </div>

          </div>

          <div class="item form-group">

            {!! Form::label('inputname', 'Téléphone mobile *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

            <div class="col-md-6 col-sm-6 col-xs-12">

              {!! Form::tel('telephone_mobile', $prospect -> telephone_mobile, ['class' => 'form-control col-md-7 col-xs-12',  'required' => 'required', 'placeholder' => 'Téléphone mobile']) !!}

            </div>

          </div>

          <div class="item form-group">

            {!! Form::label('inputname', 'Etablissement scolaire *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

            <div class="col-md-6 col-sm-6 col-xs-12">

              {!! Form::text('etablissement', $prospect -> etablissement, ['class' => 'form-control col-md-7 col-xs-12',  'required'=>'required' ,'placeholder' => 'Etablissement scolaire']) !!}

            </div>

          </div>

          <div class="item form-group">

            {!! Form::label('inputname', 'Adresse *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

            <div class="col-md-6 col-sm-6 col-xs-12">

              {!! Form::text('adresse', $prospect -> adresse, ['class' => 'form-control col-md-7 col-xs-12',   'required' => 'required','placeholder' => 'Adresse']) !!}

            </div>

          </div>

          <div class="item form-group">

            {!! Form::label('inputname', 'Pays de Résidence *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

            <div class="col-md-6 col-sm-6 col-xs-12">

              {!! Form::text('pays_resid', $prospect -> pays_resid, ['class' => 'form-control col-md-7 col-xs-12',   'required' => 'required','placeholder' => 'pays de residence']) !!}

            </div>

          </div>

          <div class="item form-group">

            {!! Form::label('inputname', 'Ville Actuelle *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

            <div class="col-md-6 col-sm-6 col-xs-12">

              {!! Form::text('ville', $prospect -> ville, ['class' => 'form-control col-md-7 col-xs-12',   'required' => 'required', 'placeholder' => 'Ville Actuelle']) !!}

            </div>

          </div>

          <span class="section">Parcours Scolaires</span>

          <div class="form-group" >

            <div class="col-md-6 col-md-offset-3">

              @if($prospect -> etat_bac === "sans_bac" )

              {{ Form::radio('etat_bac', 'sans_bac', true) }} Sans Bac

              {{ Form::radio('etat_bac', 'avec_bac') }} avec Bac

            </div>

            <div id="post-bac-diplomes" class="col-md-8 col-md-offset-3" style="display: none;">

              <div class="item form-group">

                {!! Form::label('inputname','C.N.E', ['class'=> 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                <div class="col-md-6 col-sm-6 col-xs-12">

                  {!! Form::text('cne', null, ['class' => 'form-control col-md-7 col-xs-12',   'placeholder' => 'Code National d etudiant'] ) !!}

                </div>

              </div>



              <table class="table table-condensed table-stripped">

                <thead>

                  <td>Diplôme</td>

                  <td>Filiere</td>

                  <td>Date d'obtention</td>

                  <td>Etablissement</td>

                  <td>Ville</td>

                </thead>

                <tbody>

                  @for($i = 0; $i < count($prospect_diplomes); $i++)

                  <tr>

                    <td><input type="text" name="diplome[]" value="" class="form-control"></td>

                    <td><input type="text" name="filiere[]" value="" class="form-control"></td>

                    <td><input type="date" name="date_obtenation[]" value="" class="form-control"></td>

                    <td><input type="text" name="etablissement_dip[]" value="" class="form-control"></td>

                    <td><input type="text" name="villes[]" value="" class="form-control"></td>

                  </tr>

                  @endfor

                </tbody>

              </table>

            </div>

          </div>

          @else

          <div class="col-md-6 col-md-offset-3">

            {{ Form::radio('etat_bac', 'sans_bac') }} Sans Bac

            {{ Form::radio('etat_bac', 'avec_bac', true) }} Avec Bac

          </div>

        </div>

        <div id="post-bac-diplomes" class="col-md-8 col-md-offset-3" style="display: block;">

          <div class="item form-group">

            {!! Form::label('inputname','C.N.E', ['class'=> 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

            <div class="col-md-6 col-sm-6 col-xs-12">

             {!! Form::text('cne', $prospect_diplomes[0] -> cne, ['class' => 'form-control col-md-7 col-xs-12',   'placeholder' => 'Code National d etudiant'] ) !!}

           </div>

         </div>



         <table class="table table-condensed table-stripped">

          <thead>

            <td>Diplôme</td>

            <td>Filiere</td>

            <td>Date d'obtention</td>

            <td>Etablissement</td>

            <td>Ville</td>

          </thead>

          <tbody>

           @foreach($prospect_diplomes as $prospect_diplome)

           <tr>

            <td><input type="text" name="diplome[]" value="<?php echo $prospect_diplome-> diplome?>" class="form-control"></td>

            <td><input type="text" name="filiere[]" value="<?php echo $prospect_diplome-> filiere?>" class="form-control"></td>

            <td><input type="date" name="date_obtenation[]" value="<?php echo $prospect_diplome-> date_obtenation ?>" class="form-control"></td>

            <td><input type="text" name="etablissement_dip[]" value="<?php echo $prospect_diplome-> etablissement_dip?>" class="form-control"></td>

            <td><input type="text" name="villes[]" value="<?php echo $prospect_diplome-> ville_etabli?>" class="form-control"></td>

          </tr>

          <tr>

           @endforeach

         </tbody>

       </table>

     </div>

   </div>

   @endif

   <span class="section">Formation :</span>

   <div class="item form-group">

 {!! Form::label('inputname', 'Structure *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12','readonly']) !!}

    <div class="col-md-6 col-sm-6 col-xs-12">

      {!! Form::text('id_st', $structures[0] -> abrev_st , ['class'=> 'form-control col-md-3 col-sm-3 col-xs-12']) !!}

    </div>

</div>

   <div class="item form-group">

    {!! Form::label('inputname', 'Formations *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12','readonly']) !!}

    <div class="col-md-6 col-sm-6 col-xs-12">

      {!! Form::text('id_formation', $formations[0] -> libelle_formation , ['class'=> 'form-control col-md-3 col-sm-3 col-xs-12']) !!}

    </div>

</div>

  </div>

  <div class="form-group">

    <div class="col-md-6 col-md-offset-3">

      {!! Form::reset("Annuler", ['class' => 'btn btn-warning']) !!}

      {!! Form::submit("Modifier", ['class' => 'btn btn-success']) !!}

      {!! link_to(URL::previous(), 'Retour', ['class' => 'btn btn-primary'])!!}

    </div>

  </div>

  {!! Form::close() !!}

</div>

</div>

</div>

</div>

</div>

</div>

</script>

@endsection

