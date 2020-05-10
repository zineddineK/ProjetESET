@extends('layouts.entete_amd')
@section('content')
  <div class="right_col" role="main" style="min-height: 949px;">
            <div class="">
              <div class="page-title">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <h3>Modifier une structure</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="animate x_conten">
                      {!! Form::open(['method' => 'patch', 'url' => route('structures.update',$structure) ,'class' => 'form-horizontal form-label-left']) !!}
                        {{ csrf_field() }}
                        <blockquote><i><b>Vous êtes sur point de modifier les informations qui concerne la structure :</b></i><br/><br/><i class="fa fa-university"></i> {{ $structure -> nom_st}}</blockquote>
                        <span class="section">Les informations de la structure</span>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Nom *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('nom_st',$structure -> nom_st, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Nom de la structure']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Abréviation du nom *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('abrev_st',$structure -> abrev_st, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Abréviation du nom']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Groupe concerner *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::select('id_gr', $groupe, $structure -> id_gr, ['class' => 'form-control col-md-7 col-xs-12','required' => 'required','placeholder' => 'Choisissez un groupe...']); !!}
                            </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Responsable *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('respon_st', $structure -> respon_st, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Responsable']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Numéro portable du responsable *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('num_respon_st',$structure -> num_respon_st, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Numéro portable du responsable']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'E-mail du responsable *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('email_respon_st',$structure -> email_respon_st, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'E-mail du responsable']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Numéro CNSS', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('num_cnss_st',$structure -> num_cnss_st, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Numéro CNSS']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Numéro RC ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('num_rc_st',$structure -> num_rc_st, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Numéro RC']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Compte bancaire', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('cb_st',$structure -> cb_st, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Compte bancaire']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Banque', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('banque_st',$structure -> banque_st, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Banque']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Adresse de l\'agence bancaire', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('agence_bq_st',$structure -> agence_bq_st, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Adresse de l\'agence bancaire']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Longitude', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('longitude_st',$structure -> longitude_st, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Longitude']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Latitude', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('latitude_st',$structure -> latitude_st, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Latitude']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Numero de patente', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('np_st',$structure -> np_st, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Numero de patente']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Numero d\'autorisation', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('nautor_st',$structure -> nautor_st, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Numero d\'autorisation']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Date d\'autorisation', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::date('dateautor_st',$structure -> dateautor_st, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Date d\'autorisation']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Adresse de la structure *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('adresse_st',$structure -> adresse_st, ['class' => 'form-control col-md-7 col-xs-12','required' => 'required','placeholder' => 'Adresse de la structure']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Site web', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('site_web_st',$structure -> site_web_st, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Site web de structure']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'E-mail de la structure *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::email('email_st',$structure -> email_st, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Adresse e-mail de la structure']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Téléphone fix *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('tel_fix_st1',$structure -> tel_fix_st1, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Numéro 1']) !!}<br/><br/>
                          {!! Form::text('tel_fix_st2',$structure -> tel_fix_st2, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Numéro 2']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Fax *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::text('num_fax_st1',$structure -> num_fax_st1, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Numéro 1']) !!}<br/><br/>
                          {!! Form::text('num_fax_st2',$structure -> num_fax_st2, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Numéro fax 2']) !!}
                          </div>
                        </div>
                        <div class="item form-group">
                          {!! Form::label('inputname', 'Description *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::textarea('desc_st',$structure -> desc_st, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Description']) !!}
                          </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-md-offset-3">
                            {!! Form::reset("Annuler", ['class' => 'btn btn-warning']) !!}
                            {!! Form::submit("modifier", ['class' => 'btn btn-success']) !!}
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
