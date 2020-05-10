@extends('layouts.entete_amd')

@section('content')
<div class="right_col" role="main" style="min-height: 949px;">
  <div class="">
    <div class="page-title">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <h3>Consultation du collaborateur</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="animate x_conten">
            {!! Form::open(['method' => 'PATCH', 'url' => route('liste_collaborateur.update',$collaborateur), 'class' => 'form-horizontal form-label-left']) !!}
            {{ csrf_field() }}
            <blockquote>Vous êtes sur point de modifier les informations qui concerne le collaborateur : <b>{{ $collaborateur -> nom_colla}} {{ $collaborateur -> prenom_colla}}</b></blockquote>
            <span class="section">Les informations de la collaborateur</span>
            <div class="item form-group">
              {!! Form::label('inputname', 'Nom *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
              <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('nom_colla',$collaborateur -> nom_colla, ['class' => 'form-control col-md-7 col-xs-12', '' => '']) !!}
              </div>
            </div>
            <div class="item form-group">
              {!! Form::label('inputname', 'Prenom *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
              <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('prenom_colla',$collaborateur -> prenom_colla, ['class' => 'form-control col-md-7 col-xs-12', '' => '']) !!}
              </div>
            </div>
            <div class="item form-group">
              {!! Form::label('inputname', 'Adresse e-mail *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
              <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('email_colla',$collaborateur -> email_colla, ['class' => 'form-control col-md-7 col-xs-12', '' => '']) !!}
              </div>
            </div>
            <div class="item form-group">
              {!! Form::label('inputname', 'Mot de passe *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
              <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('password',$collaborateur -> password, ['class' => 'form-control col-md-7 col-xs-12','' => '']) !!}
              </div>
            </div>
            <div class="item form-group">
              {!! Form::label('inputname', 'Fonction', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
              <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('fonction',$collaborateur -> fonction, ['class' => 'form-control col-md-7 col-xs-12','' => '']) !!}
              </div>
            </div>
            <div class="item form-group">
              {!! Form::label('inputname', 'CIN *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
              <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('cin',$collaborateur -> cin, ['class' => 'form-control col-md-7 col-xs-12','' => '']) !!}
              </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3 ">
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
