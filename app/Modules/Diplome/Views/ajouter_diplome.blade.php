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

                            {!! Form::open(['method' => 'POST','url' => '/nouveau_diplome', 'class' => 'form-horizontal']) !!}

                            {{ csrf_field() }}

                           <div class="clearfix">
                                      @if ($errors->count()>0)
                                      <div class="alert alert-danger">
                                        <strong>Impossible d'ajouter le diplôme, veuillez remplir les champs obligatoire (*) et verifier le format des champs</strong>
                                        <ul>
                                          @foreach ($errors->all() as $message)
                                          <li>{{$message}}</li>
                                          @endforeach
                                          </ul>
                                      </div>
                                      @endif
                                    </div>

                            <span class="section">Ajouter un diplôme </span>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Choisissez votre niveau d\'étude *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                   {!! Form::select('id_niveau',$niveaux,null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required','placeholder' => 'Choisir niveau']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Diplôme *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::text('libelle_diplome', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required','placeholder' => 'Diplôme']) !!}

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

