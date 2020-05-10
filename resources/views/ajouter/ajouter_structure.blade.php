@extends('layouts.entete_amd')

@section('content')
<div class="right_col" role="main" style="min-height: 949px;">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ajouter une structure</h3>
      </div>
    </div>
    <div class="row">
      <div class="x_panel">
        <div class="animate x_conten">
          {!! Form::open(['method' => 'POST', 'url' => '/nouvelle_structure', 'class' => 'form-horizontal form-label-left']) !!}
          {{ csrf_field() }}
          <blockquote><i>Veuillez saisire toutes les informations qui concerne cet établissement scolaire</i></blockquote>
          <div class="clearfix">
            @if ($errors->count()>0)
            <div class="alert alert-danger">
              <strong>Structure non ajouter, veuillez remplire les champs obligatoire (*) et verifier le format des champs</strong>
              <ul>
                @foreach ($errors->all() as $message)
                <li>{{$message}}</li>
                @endforeach
              </ul>
            </div>
            @endif
          </div>
          <span class="section">Les informations de la structure</span>
          <div class="item form-group">
            {!! Form::label('inputname', 'Nom *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('nom_st', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Nom de la structure']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Abréviation du nom *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('abrev_st', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Abréviation du nom']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Groupe concerner *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::select('id_gr', $groupe, null, ['class' => 'form-control col-md-7 col-xs-12','required' => 'required','placeholder' => 'Choisissez une structure...']); !!}
              </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Responsable *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('respon_st', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Responsable']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Numéro portable du responsable *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('num_respon_st', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Numéro portable du responsable']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'E-mail du responsable *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('email_respon_st', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'E-mail du responsable']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Numéro CNSS', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('num_cnss_st', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Numéro CNSS']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Numéro RC ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('num_rc_st', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Numéro RC']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Compte bancaire', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('cb_st', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Compte bancaire']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Banque', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('banque_st', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Banque']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Adresse de l\'agence bancaire', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('agence_bq_st', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Adresse de l\'agence bancaire']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Longitude', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('longitude_st', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Longitude']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Latitude', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('latitude_st', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Latitude']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Numero de patente', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('np_st', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Numero de patente']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Numero d\'autorisation', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('nautor_st', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Numero d\'autorisation']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Date d\'autorisation', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::date('dateautor_st', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Date d\'autorisation']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Adresse de la structure *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('adresse_st', null, ['class' => 'form-control col-md-7 col-xs-12','required' => 'required','placeholder' => 'Adresse de la structure']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Site web', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('site_web_st', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Site web de structure']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'E-mail de la structure *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::email('email_st', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Adresse e-mail de la structure']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Téléphone fix *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('tel_fix_st1', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Numéro 1']) !!}<br/><br/>
              {!! Form::text('tel_fix_st2', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Numéro 2']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Fax *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::text('num_fax_st1', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Numéro 1']) !!}<br/><br/>
              {!! Form::text('num_fax_st2', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Numéro 2']) !!}
            </div>
          </div>
          <div class="item form-group">
            {!! Form::label('inputname', 'Description *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
              {!! Form::textarea('desc_st', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Description']) !!}
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
