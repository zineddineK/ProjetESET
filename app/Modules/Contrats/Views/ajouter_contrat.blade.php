@extends('layouts.entete_amd')



@section('content')



    <div class="right_col" role="main" style="min-height: 949px;">

        <div class="">

            <div class="page-title">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <h3>Ajouter une contrat</h3>

                </div>

            </div>

            <div class="clearfix">

                            @if (session('status'))

                                <div class="alert alert-success">

                                    {{ session('status') }}

                                </div>

                            @elseif(session('errors'))
                                    <div class="alert alert-danger">
                                        {{ session('errors') }}
                                    </div>
                            @endif

                        </div>

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="x_panel">

                        <div class="animate x_conten">

                            {!! Form::open(['method' => 'POST','url' => '/nouveau_contrat', 'class' => 'form-horizontal']) !!}

                            {{ csrf_field() }}

                        <blockquote><i>Veuillez saisire toutes les informations qui concerne cette contrat</i></blockquote>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Type de contrat :', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('type_contrat', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required','placeholder' => 'Type contrat ex: contrat à durée indéterminée']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Abreviation :', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('type_contrat_abrev', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Abreviation ex: CDI et CDD...']) !!}

                                </div>

                            </div>

                            <span class="section"></span>

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

    </script>

@endsection

