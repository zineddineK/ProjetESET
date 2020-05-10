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
            <blockquote><i>Toutes les informations qui concerne ce collaborateur:</b></i><br/><br/><i class="fa fa-university"></i> {{ $collaborateur -> nom_colla}}</blockquote>
            <span class="section">Les informations de la collaborateur</span>
            <div class="item form-group">
              {!! Form::label('inputname', 'Nom *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
              <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('nom_presi_gen_user', ['class' => 'form-control col-md-7 col-xs-12', '' => '']) !!}
              </div>
            </div>
            <div class="item form-group">
              {!! Form::label('inputname', 'Prenom *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
              <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('prenom_presi_gen_user',$collaborateur -> prenom_colla, ['class' => 'form-control col-md-7 col-xs-12', '' => '']) !!}
              </div>
            </div>
            <div class="item form-group">
              {!! Form::label('inputname', 'Email *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
              <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('email_presi_gen_user',$collaborateur -> email_colla, ['class' => 'form-control col-md-7 col-xs-12', '' => '']) !!}
              </div>
            </div>
            <div class="item form-group">
              {!! Form::label('inputname', 'Mot de passe *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
              <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('password', $collaborateur -> password, ['class' => 'form-control col-md-7 col-xs-12','' => '']) !!}
              </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3 ">
               {!! Form::reset("Annuler", ['class' => 'btn btn-warning']) !!}
               {!! Form::submit("Modifier", ['class' => 'btn btn-success']) !!}
               <a href="{{ url('liste_collaborateur') }}" class='btn btn-default'>Retour</a>
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
