@extends('layouts.entete_amd')



@section('content')



    <div class="right_col" role="main" style="min-height: 949px;">

        <div class="">

            <div class="page-title">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <h3>Ajouter un diplôme</h3>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="x_panel">

                        <div class="animate x_conten">

                            {!! Form::open(['class' => 'form-horizontal']) !!}

                            {{ csrf_field() }}

                        <blockquote><i>Veuillez saisir toutes les informations qui concerne ce diplôme</i></blockquote>

                        <div class="item form-group">

                                {!! Form::label('inputname', 'Niveau d\'étude', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                   {!! Form::text('niveau_etude',$diplome -> libelle_niveau, ['class' => 'form-control col-md-7 col-xs-12', 'readonly' => 'readonly']) !!}

                                </div>

                            </div>
                        
                            <div class="item form-group">

                                {!! Form::label('inputname', 'Diplôme :', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('libelle_diplome', $diplome-> libelle_diplome, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required','placeholder' => 'Diplôme', "disabled"]) !!}

                                </div>

                            </div>

                            <span class="section"></span>

                            <div class="form-group">

                                <div class="col-md-6 col-md-offset-3">


                                </div>

                            </div>

                            {!! Form::close() !!}

                        </div>

                    </div>

                </div>



            </div>

        </div>

    </div>

    </script>

@endsection

