@extends('layouts.entete_amd')



@section('content')



<div class="right_col" role="main" style="min-height: 949px;">

  <div class="">

    <div class="page-title">

      <div class="col-md-12 col-sm-12 col-xs-12">

        <h3>Ajouter une demande d'admission</h3>

      </div>

    </div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="x_panel">

          <button onclick="sendAjax()">Récuperer les données depuis le site</button>

          <div class="animate x_conten">

            {!! Form::open(['method' => 'POST','url' => '/nouvelle_demande_admission', 'class' => 'form-horizontal']) !!}

            {{ csrf_field() }}

            <blockquote><i>Veuillez saisire toutes les informations qui concerne cette demande d'admission</i></blockquote>

            <div class="clearfix">

              @if (session('status1'))

              <div class="alert alert-danger">

                {{ session('status1') }}

              </div>

              @endif

            </div>

            <span class="section">Informations Personnelles</span>

            <div class="item form-group">

              {!! Form::label('inputname', 'Civilite *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

              <div class="col-md-6 col-sm-6 col-xs-12 ">

                {!! Form::radio('civilite', 'M', ['required' => 'required']) !!} M. <br/>{!! Form::radio('civilite', 'F',['required' => 'required']) !!} Mme

              </div>

            </div>

            <div class="item form-group">

              {!! Form::label('inputname', 'Nom *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

              <div class="col-md-6 col-sm-6 col-xs-12">

                {!! Form::text('nom', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Entrez votre nom']) !!}

              </div>

            </div>

            <div class="item form-group">

              {!! Form::label('inputname', 'Prenom *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

              <div class="col-md-6 col-sm-6 col-xs-12">

                {!! Form::text('prenom', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Entrez votre prenom']) !!}

              </div>

            </div>

            <div class="item form-group">

              {!! Form::label('inputname','N° Passeport (Etudiant Etranger) ', ['class'=> 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

              <div class="col-md-6 col-sm-6 col-xs-12">

                {!! Form::text('n_pass', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => ' N° Passeport'] ) !!}

              </div>

            </div>

            <div class="item form-group">

              {!! Form::label('inputname','N° C.I.N ', ['class'=> 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

              <div class="col-md-6 col-sm-6 col-xs-12">

                {!! Form::text('cin', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Entrez votre N° C.I.N'] ) !!}

              </div>

            </div>

            <div class="item form-group">

              {!! Form::label('inputname', 'Date de naissance *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

              <div class="col-md-6 col-sm-6 col-xs-12">

                {!! Form::date('date_de_naissance', null, ['class' => 'form-control col-md-7 col-xs-12','required' => 'required', 'placeholder' => 'Date de naissance']) !!}

              </div>

            </div>

            <div class="item form-group">

              {!! Form::label('inputname', 'Nationalité *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

              <div class="col-md-6 col-sm-6 col-xs-12">

                {!! Form::select('nationalite',[

                  'Choisir la nationalité' => ' Choisir la nationalité',

                  'Marocain' => 'Marocain',

                  'Français' => 'Français',

                  ] ,null,['class' => 'form-control']) !!}

                </div>

              </div>

              <div class="item form-group">

                {!! Form::label('inputname', 'Lieu de naissance * ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                <div class="col-md-6 col-sm-6 col-xs-12">

                  {!! Form::text('lieu_de_naissance', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required','placeholder' => 'Lieu de Naissance']) !!}

                </div>

              </div>

              <span class="section">Contacts :</span>

              <div class="item form-group">

                {!! Form::label('inputname', 'Adresse E-mail *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                <div class="col-md-6 col-sm-6 col-xs-12">

                  {!! Form::text('e_mail', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Votre E-mail ex:example@example.com']) !!}

                </div>

              </div>

              <div class="item form-group">

                {!! Form::label('inputname', 'Téléphone fixe ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                <div class="col-md-6 col-sm-6 col-xs-12">

                  {!! Form::tel('telephone_fixe', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Téléphone fix']) !!}

                </div>

              </div>

              <div class="item form-group">

                {!! Form::label('inputname', 'Téléphone mobile *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                <div class="col-md-6 col-sm-6 col-xs-12">

                  {!! Form::tel('telephone_mobile', null, ['class' => 'form-control col-md-7 col-xs-12','required' => 'required', 'placeholder' => 'Téléphone mobile']) !!}

                </div>

              </div>

              <div class="item form-group">

                {!! Form::label('inputname', 'Etablissement scolaire *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                <div class="col-md-6 col-sm-6 col-xs-12">

                  {!! Form::text('etablissement', null, ['class' => 'form-control col-md-7 col-xs-12','required'=>'required' ,'placeholder' => 'Etablissement scolaire']) !!}

                </div>

              </div>

              <div class="item form-group">

                {!! Form::label('inputname', 'Adresse *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                <div class="col-md-6 col-sm-6 col-xs-12">

                  {!! Form::text('adresse', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required','placeholder' => 'Adresse']) !!}

                </div>

              </div>

              <div class="item form-group">

                {!! Form::label('inputname', 'Pays de Résidence *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                <div class="col-md-6 col-sm-6 col-xs-12">

                  {!! Form::text('pays_resid', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required','placeholder' => 'Pays de residence']) !!}

                </div>

              </div>

              <div class="item form-group">

                {!! Form::label('inputname', 'Ville Actuelle *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                <div class="col-md-6 col-sm-6 col-xs-12">

                  {!! Form::text('ville', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Ville Actuelle']) !!}

                </div>

              </div>

              <span class="section">Parcours Scolaires</span>

              <div class="form-group" >

                <div class="col-md-6 col-md-offset-3">

                  {{ Form::radio('etat_bac', 'sans_bac', true) }} Sans Bac

                </div>

                <div class="col-md-6 col-md-offset-3">

                  {{ Form::radio('etat_bac', 'avec_bac') }} Avec Bac

                </div><br><br>

                <div id="post-bac-diplomes" style="display:none;" ><br>

                  <div class="item form-group">

                    {!! Form::label('inputname','C.N.E (Code national d\'étudiant) *', ['class'=> 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                    <div class="col-md-6 col-sm-6 col-xs-12">

                      {!! Form::text('cne', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Code national d\'étudiant'] ) !!}

                    </div>

                  </div>

                  <table class="table table-condensed table-stripped">

                    <thead>

                      <td>Diplôme</td>

                      <td>Filiere</td>

                      <td>Date d'obtention</td>

                      <td>Etablissement</td>

                      <td>Ville</td>

                      <td>Note</td>

                    </thead>

                    <tbody>

                      <tr>

                        <td><input type="text" placeholder="Bac" name="diplome[]" value="" class="form-control important"></td>

                        <td><input type="text" placeholder="Science expérimentale, science mathématique, sciences economique ..." name="filiere[]" value="" class="form-control important"></td>

                        <td><input placeholder="2017" type="number" min="1980" max="3000" name="date_obtenation[]" value="" class="form-control important"></td>

                        <td><input type="text" placeholder="Etablissement" name="etablissement_dip[]" value="" class="form-control important"></td>

                        <td><input type="text" placeholder="Ville de l'établissement" name="villes[]" value="" class="form-control"></td>

                        <td><input type="text" placeholder="La note" name="notes[]" value="" class="form-control"></td>

                      </tr>

                      <tr>

                        <td><input type="text" placeholder="Bac+2" name="diplome[]" value="" class="form-control"></td>

                        <td><input type="text" placeholder="Science expérimentale, science mathématique, sciences economique ..." name="filiere[]" value="" class="form-control"></td>

                        <td><input placeholder="2017" type="number" name="date_obtenation[]" value="" class="form-control"></td>

                        <td><input type="text" placeholder="Etablissement" name="etablissement_dip[]" value="" class="form-control"></td>

                        <td><input type="text" placeholder="Ville de l'établissement" name="villes[]" value="" class="form-control"></td>

                        <td><input type="text" placeholder="La note" name="notes[]" value="" class="form-control"></td>

                      </tr>



                    </tbody>

                  </table>

                </div>

              </div>

              <span class="section">Formation choisie:</span>



              <div class="item form-group">

                {!! Form::label('inputname', 'Structure *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                <div class="col-md-6 col-sm-6 col-xs-12">

                  {!! Form::select('id_st', $structures, null, ['id'=>'structure','class' => 'form-control col-md-7 col-xs-12','required' => 'required','placeholder' => 'Choisissez une structure...']); !!}

                </div>

              </div>

              <div class="item form-group">

                {!! Form::label('inputname', 'Formations *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                <div class="col-md-6 col-sm-6 col-xs-12">

                  {!! Form::select('id_formation', ['Choisissez votre formation'=>'Choisissez votre formation'], null, ['id'=>'formation','class' => 'form-control col-md-7 col-xs-12','required' => 'required','placeholder' => 'Choisissez une formation...']); !!}

                </div>

              </div>

              <div class="form-group">

                <div class="col-md-6 col-md-offset-3">

                  {!! Form::reset("Annuler", ['class' => 'btn btn-warning']) !!}

                  {!! Form::submit("Ajouter", ['class' => 'btn btn-success']) !!}

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

