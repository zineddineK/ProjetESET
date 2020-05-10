@extends('layouts.entete_amd')

@section('content')
<div class="right_col" role="main" style="min-height: 949px;">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Consultation du groupe</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
      </div>
    </div>
    <div class="x_panel">
      <div class="animate x_conten">
        {!! Form::open(['method' => 'POST', 'url' => '/nouveau_group', 'class' => 'form-horizontal form-label-left']) !!}
        {{ csrf_field() }}
        <blockquote><i>Toutes les informations qui concerne le groupe : {{$groupe->abreviation}}</i></blockquote>
        <div class="clearfix">
          @if ($errors->count()>0)
          <div class="alert alert-danger">
            <strong>group non ajouter, veuillez remplire les champs obligatoire (*) et verifier le format des champs</strong>
            <ul>
              @foreach ($errors->all() as $message)
              <li>{{$message}}</li>
              @endforeach
            </ul>
          </div>
          @endif
        </div>
        <span class="section">Les informations du groupe</span>
        <div class="item form-group">
          {!! Form::label('inputname', 'Nom du groupe ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('libelle_gr', $groupe->libelle_gr, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly', 'placeholder' => 'Nom du groupe']) !!}
          </div>
        </div>
        <div class="item form-group">
          {!! Form::label('inputname', 'Abreviation ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('abreviation', $groupe->abreviation, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly', 'placeholder' => 'Abreviation']) !!}
          </div>
        </div>
         <div class="item form-group">
          {!! Form::label('inputname', 'Telephonne fixe ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('telephone_fixe_gr', $groupe->telephone_fixe_gr, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly', 'placeholder' => 'Telephonne fixe']) !!}
          </div>
        </div>
        <div class="item form-group">
          {!! Form::label('inputname', 'Adresse ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('adresse', $groupe->adresse, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly','placeholder' =>'Adresse']) !!}
          </div>
        </div>
        <div class="item form-group">
          {!! Form::label('inputname', 'Adresse e-mail ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('email_gr', $groupe->email_gr, ['class' => 'form-control col-md-7 col-xs-12','readonly' =>'readonly', 'placeholder' => 'Adresse e-mail']) !!}
          </div>
        </div>
         <div class="item form-group">
          {!! Form::label('inputname', 'Nom du responsable ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('responsable_gr', $groupe->responsable_gr, ['class' => 'form-control col-md-7 col-xs-12','readonly' =>'readonly', 'placeholder' => 'Nom du responsable']) !!}
          </div>
        </div>
         <div class="item form-group">
          {!! Form::label('inputname', 'Description ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::textarea('description_gr', $groupe->description_gr, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly', 'placeholder' => 'Description du groupe']) !!}
          </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
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
