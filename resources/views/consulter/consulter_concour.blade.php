@extends('layouts.entete_amd')
@section('content')
<div class="right_col" role="main" style="min-height: 949px;">
   <div class="">
      <div class="page-title">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <h3>Consultation du concour</h3>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
               <div class="animate x_conten">
                  {!! Form::open(['method' => 'POST', 'url' => '/nouveau_concour', 'class' => 'form-horizontal form-label-left']) !!}
                  {{ csrf_field() }}
                  <blockquote>Toutes les informations qui concerne ce concour :</blockquote>
                  <span class="section">Les informations du concour</span>
                  <div class="item form-group">
                     {!! Form::label('inputname', 'Abriveation du structure *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('id_st', $structures[0]->abrev_st, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}
                     </div>
                  </div>
                  <div class="item form-group">
                     {!! Form::label('inputname', 'Nom du concour *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('libelle_concour', $concour->libelle_concour , ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}
                     </div>
                  </div>
                  <?php  
                     $date=strtotime($concour->date_concour);
                     $date=date('d-m-Y',$date);
                     $time=strtotime($concour->heure_concour);
                     $time = date('H:i',$time) ;
                     ?>
                  <div class="item form-group">
                     {!! Form::label('inputname', 'Date du concour *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('date_concour', $date, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}
                     </div>
                  </div>
                  <div class="item form-group">
                     {!! Form::label('inputname', 'Heure du concour *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                     <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('heure_concour', $time, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}
                     </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                     <div class="col-md-6 col-md-offset-3 ">
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