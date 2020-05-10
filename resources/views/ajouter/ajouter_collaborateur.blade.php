@extends('layouts.entete_amd')

@section('content')
<div class="right_col" role="main" style="min-height: 949px;">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ajouter un collaborateur</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
      </div>
    </div>
    <div class="x_panel">
      <div class="animate x_conten">
        {!! Form::open(['method' => 'POST', 'url' => '/nouveau_collaborateur', 'class' => 'form-horizontal form-label-left']) !!}
        {{ csrf_field() }}
        <blockquote><i>Veuillez saisire toutes les informations qui concerne ce collaborateur</i></blockquote>
        <div class="clearfix">
          @if ($errors->count()>0)
          <div class="alert alert-danger">
            <strong>Collaborateur non ajouter, veuillez remplire les champs obligatoire (*) et verifier le format des champs</strong>
            <ul>
              @foreach ($errors->all() as $message)
              <li>{{$message}}</li>
              @endforeach
            </ul>
          </div>
          @endif
        </div>
        <span class="section">Les informations du collaborateur</span>
        <div class="item form-group">
          {!! Form::label('inputname', 'Nom *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('nom_colla', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Nom de Collaborateur']) !!}
          </div>
        </div>
        <div class="item form-group">
          {!! Form::label('inputname', 'Prenom *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('prenom_colla', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Prenom de Collaborateur']) !!}
          </div>
        </div>
        <div class="item form-group">
          {!! Form::label('inputname', 'Adresse e-mail *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('email_colla', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Adresse e-mail']) !!}
          </div>
        </div>
        <div class="item form-group">
          {!! Form::label('inputname', 'Password (au moins 7 caractères) *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::password('password', null,['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Password']) !!}
          </div>
        </div>
        <div class="item form-group">
          {!! Form::label('inputname', 'Fonction du collaborateur *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('fonction', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Fonction du collaborateur']) !!}
          </div>
        </div>
        <div class="item form-group">
          {!! Form::label('inputname', 'Numéro CIN *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('cin', null, ['class' => 'form-control col-md-7 col-xs-12','required' =>'required', 'placeholder' => 'Numéro CIN']) !!}
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
