@extends('layouts.entete_amd')



@section('content')



    <div class="right_col" role="main" style="min-height: 949px;">

        <div class="">

            <div class="page-title">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <h3>Modifier une entreprise</h3>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="x_panel">

                        <div class="animate x_conten">

                            {!! Form::open(['method' => 'PATCH','url' => route('Entreprise.update', $entreprises), 'class' => 'form-horizontal']) !!}

                            {{ csrf_field() }}

                        
                            <div class="item form-group">

                                {!! Form::label('inputname', 'Entreprise * :', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('libelle_entreprises', $entreprises->libelle_entreprises, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!}

                                </div>

                            </div>

                            <span class="section"></span>

                            <div class="form-group">

                                <div class="col-md-6 col-md-offset-3">

                                    {!! Form::reset("Annuler", ['class' => 'btn btn-warning']) !!}

                                    {!! Form::submit("Ajouter", ['class' => 'btn btn-success']) !!}
                                    
                                    {{  link_to(URL::previous(), "Retour",['class' => 'btn btn-success']) }}

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

