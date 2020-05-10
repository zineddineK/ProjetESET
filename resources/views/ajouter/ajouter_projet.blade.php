@extends('layouts.entete_amd')



@section('content')

<div class="right_col" role="main" style="min-height: 949px;">

  <div class="">

    <div class="page-title">

      <div class="title_left">

        <h3>Ajouter un projet de prospection</h3>

      </div>

    </div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">

      </div>

    </div>

    <div class="x_panel">

      <div class="animate x_conten">

        {!! Form::open(['method' => 'POST', 'url' => '/nouveau_projet', 'class' => 'form-horizontal form-label-left']) !!}

        {{ csrf_field() }}

        <blockquote><i>Veuillez saisire toutes les informations qui concerne ce projet</i></blockquote>

        <div class="clearfix">

          @if ($errors->count()>0)

          <div class="alert alert-danger">

            <strong>Projet non ajouter, veuillez remplire les champs obligatoire (*) et verifier le format des champs</strong>

            <ul>

              @foreach ($errors->all() as $message)

              <li>{{$message}}</li>

              @endforeach

            </ul>

          </div>

          @endif

        </div>

        <span class="section">Les informations du projet</span>

        <div class="item form-group">

          {!! Form::label('inputname', 'Nom du projet *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

          <div class="col-md-6 col-sm-6 col-xs-12">

            {!! Form::text('libelle_proj_pros', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Nom de projet exp: Prospection téléphonique du moins juin 2017']) !!}

          </div>

        </div>

        <div class="item form-group">

          {!! Form::label('inputname', 'Responsable du projet *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

          <div class="col-md-6 col-sm-6 col-xs-12">

            {!! Form::select('id_collaborateur',$collaborateurs->pluck('nom_complet'), null, ['class' => 'form-control col-md-7 col-xs-12','required' => 'required','placeholder' => 'Choisissez un responsable du projet...']); !!}

          </div>

        </div>

        <div class="item form-group">

          {!! Form::label('inputname', 'Date début *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

          <div class="col-md-6 col-sm-6 col-xs-12">

            {!! Form::date('date_deb_proj_pros', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!}

          </div>

        </div>

        <div class="item form-group">

          {!! Form::label('inputname', 'Date fin *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

          <div class="col-md-6 col-sm-6 col-xs-12">

            {!! Form::date('date_fin_proj_pros', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!}

          </div>

        </div>

        <div class="item form-group">

          {!! Form::label('inputname', 'Structure concerner *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

          <div class="col-md-6 col-sm-6 col-xs-12">

            {!! Form::select('id_st', $structures, null, ['class' => 'form-control col-md-7 col-xs-12','required' => 'required','placeholder' => 'Choisissez une structure...']); !!}

          </div>

        </div>

        <div class="item form-group">

          {!! Form::label('inputname', 'Etat d\'activasion du projet *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

          <div class="col-md-6 col-sm-6 col-xs-12">

            {!! Form::radio('activation', 'activer', true,['required' => 'required']) !!} Activer<br>  {!! Form::radio('activation', 'désactiver', false,['required' => 'required']) !!} Désactiver

          </div>

        </div>

        <div class="item form-group">

          {!! Form::label('inputname', 'Description*', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

          <div class="col-md-6 col-sm-6 col-xs-12">

            {!! Form::textarea('description', null, ['class' => 'form-control col-md-7 col-xs-12','required' =>'required', 'placeholder' => 'Description le projet']) !!}

          </div>

        </div>

        <div class="ln_solid"></div>

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



@endsection

