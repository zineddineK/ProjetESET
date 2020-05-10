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
            {!! Form::open(['method' => 'PATCH', 'url' => route('projet.update',$projets), 'class' => 'form-horizontal form-label-left']) !!}
            {{ csrf_field() }}
            <blockquote><i>Toutes les informations qui concerne le projet : {{$projets -> libelle_proj_pros }} </i></blockquote>
            <span class="section">Les informations du projet</span>
            <div class="item form-group">
               {!! Form::label('inputname', 'Nom du projet *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
               <div class="col-md-6 col-sm-6 col-xs-12">
                  {!! Form::text('libelle_proj_pros', $projets -> libelle_proj_pros, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Nom de projet']) !!}
               </div>
            </div>
            <div class="item form-group">
               {!! Form::label('inputname', 'Date début *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
               <div class="col-md-6 col-sm-6 col-xs-12">
                  {!! Form::date('date_deb_proj_pros', $projets -> date_deb_proj_pros, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!}
               </div>
            </div>
            <div class="item form-group">
               {!! Form::label('inputname', 'Date fin *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
               <div class="col-md-6 col-sm-6 col-xs-12">
                  {!! Form::date('date_fin_proj_pros', $projets -> date_fin_proj_pros, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!}
               </div>
            </div>
            <div class="item form-group">
               {!! Form::label('inputname', 'Structure concerner *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
               <div class="col-md-6 col-sm-6 col-xs-12">
                  
          {!! Form::select('id_st',$structures ,$concour -> id_st,['class' => 'form-control col-md-7 col-xs-12'])!!}

               </div>
            </div>
            <div class="item form-group">
               {!! Form::label('inputname', 'Description*', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
               <div class="col-md-6 col-sm-6 col-xs-12">
                  {!! Form::textarea('description', $projets -> description, ['class' => 'form-control col-md-7 col-xs-12','required' =>'required', 'placeholder' => 'Description le projet']) !!}
               </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
               <div class="col-md-6 col-md-offset-3">
                  {!! Form::reset("Annuler", ['class' => 'btn btn-warning']) !!}
                  {!! Form::submit("Modifier", ['class' => 'btn btn-success']) !!}
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