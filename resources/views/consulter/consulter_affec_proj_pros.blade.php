@extends('layouts.entete_amd')

@section('content')
<div class="right_col" role="main" style="min-height: 949px;">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Consulter l'affectation</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
      </div>
    </div>
    <div class="x_panel">
      <div class="animate x_conten">
        {!! Form::open(['method' => 'POST', 'url' => '/nouvelle_affectation_proj', 'class' => 'form-horizontal form-label-left']) !!}
        {{ csrf_field() }}
        <blockquote><i>Toutes les informations qui concerne cette affectation :</i></blockquote>
        <span class="section">Les informations de l'affectation</span>
        <div class="item form-group">
          {!! Form::label('inputname', 'Responsable du projet ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::select('id_collaborateur', $collaborateurs , $affect_colla_projet-> id_collaborateur,['class' => 'form-control col-md-7 col-xs-12','readonly' => 'readonly','placeholder' => 'Choisissez un collaborateur...']); !!}
          </div>
        </div>
        <div class="item form-group">
          {!! Form::label('inputname', 'Date début ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::date('date_deb_proj_pros', $affect_colla_projet -> date_deb_proj_pros, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}
          </div>
        </div>
        <div class="item form-group">
          {!! Form::label('inputname', 'Date fin ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
          <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::date('date_fin_proj_pros', $affect_colla_projet -> date_fin_proj_pros, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}
          </div>
        </div>
        <div class="item form-group">
          {!! Form::label('inputname', 'Responsable du projet ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
            {!! Form::select('id_responsable', $collaborateurs , $affect_colla_projet -> id_responsable,['class' => 'form-control col-md-7 col-xs-12','readonly' => 'readonly','placeholder' => 'Choisissez un responsable...']); !!}
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
