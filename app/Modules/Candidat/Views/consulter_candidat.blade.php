@extends('layouts.entete_amd')



@section('content')

    <div class="right_col" role="main" style="min-height: 949px;">

        <div class="">

            <div class="page-title">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <h3>Fiche d'un candidat </h3>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="x_panel">

                        <div class="animate x_conten">

                            {!! Form::open(['method' => 'POST', 'url' => '/nouvel_candidat', 'class' =>'form-horizontal form-label-left']) !!}

                            {{ csrf_field() }}

                            <blockquote>Cette fiche concerne le candidat : {{ $candidat -> nom_candidat}} {{ $candidat -> prenom_candidat}}</blockquote>


                            <div class="item form-group">

                                <!-- {!! Form::label('inputname', 'TOF ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
 -->
                                <div class="pull-left">

                                   <img src="{{URL($candidat->photo)}}" width="200" height="200" class="css-class" alt="alt text">

                                </div>

                            </div>

                            <span class="section">Les informations personnelles</span>

                            <div class="item form-group">

                            {!! Form::label('inputname', 'Civilite ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                            <div class="col-md-6 col-sm-6 col-xs-12 ">

                                @if($candidat->civilite === "M") 

                                {!! Form::radio('civilite', "M", true) !!} M. <br/>

                                @else

                                {!! Form::radio('civilite', 'F',true) !!} Mme.



                                @endif

                            </div>

                        </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Nom ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('nom_candidat',$candidat -> nom_candidat, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Prenom ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('prenom_candidat',$candidat -> prenom_candidat, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                    {!! Form::label('inputname', 'Adresse E-mail', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('email_candidat', $candidat -> email_candidat, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                    </div>

                                </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'CIN ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('cin',$candidat -> cin, ['class' => 'form-control col-md-7 col-xs-12','readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Nationalité ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('natio',$candidat -> natio, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Date de naissance ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::date('date_de_naissance',$candidat -> date_de_naissance, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Lieu de naissance ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('lieu_de_naissance',$candidat -> lieu_de_naissance, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Statut marital ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('statut_marital',$candidat -> libelle_statut, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Nombre d\'enfant ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('nbr_enfant',$candidat -> nbr_enfant, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            
                    <div class="ln_solid"></div>

                            <div class="form-group">

                                <div class="col-md-6 col-md-offset-3 ">

                                    {{link_to(URL::previous(), 'Retour', ['class'=>'btn btn-primary'])}}

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



            </div>

        </div>

    </div>



@endsection

