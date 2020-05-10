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

                            {!! Form::open(['method' => 'POST', 'url' => '/confirmer_affectation', 'class' => 'form-horizontal form-label-left']) !!}

                            {{ csrf_field() }}

                            <blockquote>Cette fiche concerne le candidat : {{ $candidat -> nom_candidat}} {{ $candidat -> prenom_candidat}}</blockquote>


                            <div class="item form-group">

                                <!-- {!! Form::label('inputname', 'TOF ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
 -->
                                <div class=" pull-left">

                                   <img src="{{URL::asset($candidat->photo)}}" name="photo" width="200" height="200" class="css-class" alt="alt text">

                                </div>

                            </div>

                            <span class="section">Les informations personnelles</span>   <div class="item form-group">

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

                                {!! Form::hidden('id_employee',$candidat -> id_candidat, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                {!! Form::hidden('photo',$candidat -> photo, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}


                                    {!! Form::text('nom_employee',$candidat -> nom_candidat, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Prenom ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('prenom_employee',$candidat -> prenom_candidat, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                    {!! Form::label('inputname', 'Adresse E-mail *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('email_employee', $candidat -> email_candidat, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

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

                                    {!! Form::select('statut_marital',$status,$candidat -> statut_marital, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Nombre d\'enfant ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('nbr_enfants',$candidat -> nbr_enfant, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            <span class="section">Les informations d'affectation</span>  

                                            <div class="item form-group">

                                {!! Form::label('inputname', 'Structure :', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">


                                    {!! Form::select('structure',$structures ,null,['class' => 'form-control','id'=>'structure' ]) !!}

                                </div>

                            </div>
                        
                        <div class="item form-group">

                                {!! Form::label('inputname', 'Services :', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::select('service',['Choisissez un service' => 'Choisissez un service'] ,null,['class' => 'form-control','id'=>'services']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Fonctions :', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::select('fonction',['Choisissez une fonction' => 'Choisissez une fonction'] ,null,['class' => 'form-control','id'=>'fonctions']) !!}

                                </div>

                            </div>
        
        
                            <div class="ln_solid"></div>

                            <div class="form-group">

                                <div class="col-md-6 col-md-offset-3 ">

                                    {{link_to(URL::previous(), 'Retour', ['class'=>'btn btn-primary'])}}


                                    {!! Form::submit("Affecter", ['class' => 'btn btn-success']) !!}

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

