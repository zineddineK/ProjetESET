@extends('layouts.entete_amd')

@section('content')
<div class="right_col" role="main" style="min-height: 949px;">
  <div class="">
    <div class="page-title">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <h3>Consultation du script</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="animate x_conten">
            {!! Form::open(['method' => 'POST', 'url' => '/nouveau_script', 'class' => 'form-horizontal form-label-left']) !!}
            {{ csrf_field() }}
            <blockquote>Toutes les informations qui concerne ce script :</blockquote>
            <span class="section">Les informations du script</span>
            <div class="item form-group">
              {!! Form::label('inputname', 'Nom du structure ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
              <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('id_st',$structures[0]->abrev_st, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}
              </div>
            </div>
            <div class="item form-group">
              {!! Form::label('inputname', 'Script ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
              <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::textarea('text_script',$script ->text_script, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}
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
