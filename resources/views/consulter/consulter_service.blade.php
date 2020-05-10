@extends('layouts.entete_amd')

@section('content')
<div class="right_col" role="main" style="min-height: 949px;">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Consultation de la formation</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">

      </div>
    </div>
    <div class="x_panel">
      <div class="animate x_conten">
        {!! Form::open(['method' => 'POST', 'url' => '/nouveau_service', 'class' => 'form-horizontal form-label-left']) !!}
        {{ csrf_field() }}
        <blockquote><i>Toutes les informations qui concerne ce service : {{$service->libelle_service}}</i></blockquote>
        <div class="clearfix">
          @if ($errors->count()>0)
          <div class="alert alert-danger">
            <strong>Service non ajouter, veuillez remplire les champs obligatoire (*) et verifier le format des champs</strong>
            <ul>
              @foreach ($errors->all() as $message)
              <li>{{$message}}</li>
              @endforeach
            </ul>
          </div>
          @endif
        </div>
        <span class="section">Les informations du service</span>
        <div class="item form-group">
          {!! Form::label('inputname', 'Nom du service ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::text('libelle_service', $service->libelle_service , ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly', 'placeholder' => 'Nom du service']) !!}
          </div>
        </div>
         <div class="item form-group">
          {!! Form::label('inputname', 'Structure concerner', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
         {!! Form::text('id_st', $structures[0]->abrev_st, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly', 'placeholder' => 'Abriveation du structure']) !!}
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
