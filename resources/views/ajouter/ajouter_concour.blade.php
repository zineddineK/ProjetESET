@extends('layouts.entete_amd')

@section('content')
<div class="right_col" role="main" style="min-height: 949px;">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ajouter un concour</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
      </div>
    </div>
    <div class="x_panel">
      <div class="animate x_conten">
        {!! Form::open(['method' => 'POST', 'url' => '/nouveau_concour', 'class' => 'form-horizontal form-label-left']) !!}
        {{ csrf_field() }}
        <blockquote><i>Veuillez saisire toutes les informations qui concerne ce concour</i></blockquote>
        <div class="clearfix">
          @if ($errors->count()>0)
          <div class="alert alert-danger">
            <strong>concour non ajouter, veuillez remplire les champs obligatoire (*) et verifier le format des champs</strong>
            <ul>
              @foreach ($errors->all() as $message)
              <li>{{$message}}</li>
              @endforeach
              </ul>
          </div>
          @endif
        </div>
        <span class="section">Les informations du concour</span>
        <div class="item form-group">
          {!! Form::label('inputname', 'Titre du concour *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('libelle_concour', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Titre du concour']) !!}
          </div>
        </div>
        <div class="item form-group">
          {!! Form::label('inputname', ' Structure concerner *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
         {!! Form::select('id_st', $structures ,null,['class' => 'form-control col-md-7 col-xs-12']) !!}
          </div>
        </div>
        <div class="item form-group">
          {!! Form::label('inputname', 'Date du concour *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::Date('date_concour', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required','data-date-format' => 'DD-YYYY-MM' ,'placeholder' => 'Date du concour']) !!}
          </div>
        </div>
        <div class="item form-group">
          {!! Form::label('inputname', 'Heure du concour *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::time('heure_concour', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Heure du concour']) !!}
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
