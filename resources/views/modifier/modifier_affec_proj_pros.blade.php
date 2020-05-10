@extends('layouts.entete_amd')

@section('content')
<div class="right_col" role="main" style="min-height: 949px;">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Modifier une affectation</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
      </div>
    </div>
    <div class="x_panel">
      <div class="animate x_conten">
        {!! Form::open(['method' => 'PATCH', 'url' => route('affectations.update',$aff_proj_colla), 'class' => 'form-horizontal form-label-left']) !!}
        {{ csrf_field() }}
        <blockquote><i>Veuillez saisire toutes les informations qui concerne l'affectaion du projet : <b>{{$aff_proj_colla -> libelle_proj_pros}}</b></i></blockquote>
        <div class="clearfix">
          @if ($errors->count()>0)
          <div class="alert alert-danger">
            <strong>Projet non modifier, veuillez remplire les champs obligatoire (*) et verifier le format des champs</strong>
            <ul>
              @foreach ($errors->all() as $message)
              <li>{{$message}}</li>
              @endforeach
            </ul>
          </div>
          @endif
        </div>
        <span class="section">Les informations de l'affectation</span>
        <div class="item form-group">
          {!! Form::label('inputname', 'Responsable du projet *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::select('id_collaborateur', $collaborateurs , $aff_proj_colla-> id_collaborateur,['class' => 'form-control col-md-7 col-xs-12','required' => 'required','placeholder' => 'Choisissez un collaborateur...']); !!}
          </div>
        </div>
        <div class="item form-group">
          {!! Form::label('inputname', 'Date début *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::date('date_deb_proj_pros', $aff_proj_colla -> date_deb_proj_pros, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!}
          </div>
        </div>
        <div class="item form-group">
          {!! Form::label('inputname', 'Date fin *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::date('date_fin_proj_pros', $aff_proj_colla -> date_fin_proj_pros, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!}
          </div>
        </div>
        <div class="item form-group">
          {!! Form::label('inputname', 'Responsable du projet *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::select('id_responsable', $collaborateurs , $aff_proj_colla -> id_responsable,['class' => 'form-control col-md-7 col-xs-12','required' => 'required','placeholder' => 'Choisissez un responsable...']); !!}
          </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            {!! Form::reset("Annuler", ['class' => 'btn btn-warning']) !!}
            {!! Form::submit("Modifier", ['class' => 'btn btn-success']) !!}
            {{link_to(URL::previous(), 'Retour', ['class'=>'btn btn-primary'])}}
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
