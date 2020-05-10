@extends('layouts.entete_amd')



@section('content')

    <div class="right_col" role="main" style="min-height: 949px;">

        <div class="">

            <div class="page-title">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <h3>Fiche d'un employee </h3>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="x_panel">

                        <div class="animate x_conten">

                            {!! Form::open(['method' => 'POST', 'url' => '/nouvel_employee', 'class' => 'form-horizontal form-label-left']) !!}

                            {{ csrf_field() }}

                            <blockquote>Cette fiche concerne le employee : {{ $employee -> nom_employee}} {{ $employee -> prenom_employee}}</blockquote>


                            <div class="item form-group">

                                <!-- {!! Form::label('inputname', 'TOF ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
 -->
                                <div class=" pull-left">

                                   <img src="{{URL::asset($employee->photo)}}" width="200" height="200" class="css-class" alt="alt text">

                                </div>

                            </div>

                            <span class="section">Les informations personnelles</span>

                            <div class="item form-group">

                            {!! Form::label('inputname', 'Civilite ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                            <div class="col-md-6 col-sm-6 col-xs-12 ">

                                @if($employee->civilite === "M") 

                                {!! Form::radio('civilite', "M", true) !!} M. <br/>

                                @else

                                {!! Form::radio('civilite', 'F',true) !!} Mme.



                                @endif

                            </div>

                        </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Nom ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('nom_employee',$employee -> nom_employee, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Prenom ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('prenom_employee',$employee -> prenom_employee, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                    {!! Form::label('inputname', 'Adresse E-mail', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('email_employee', $employee -> email_employee, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                    </div>

                                </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'CIN ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('cin',$employee -> cin, ['class' => 'form-control col-md-7 col-xs-12','readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Nationalité ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('natio',$employee -> natio, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Date de naissance ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::date('date_de_naissance',$employee -> date_de_naissance, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Lieu de naissance ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('lieu_de_naissance',$employee -> lieu_de_naissance, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Statut marital ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('statut_marital',$employee -> libelle_statut, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Nombre d\'enfant ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('nbr_enfants',$employee->nbr_enfants, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>




                           <span class="section">Les informations d'affectation</span>
                           
                            <div class="item form-group">

                                    {!! Form::label('inputname','Structure', ['class'=> 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::select('structures',$structures,$employee -> structure, ['class' => 'form-control col-md-7 col-xs-12','disabled']) !!}

                                    </div>
                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname','Service', ['class'=> 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::select('services',$services,$employee -> service, ['class' => 'form-control col-md-7 col-xs-12','disabled']) !!}

                                    </div>
                                </div>


                                <div class="item form-group">

                                    {!! Form::label('inputname','Fonction', ['class'=> 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::select('fonction',$fonctions,$employee -> fonction, ['class' => 'form-control col-md-7 col-xs-12','disabled']) !!}

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

