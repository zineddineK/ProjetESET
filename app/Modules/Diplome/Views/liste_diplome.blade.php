@extends('layouts.entete_amd')


@section('content')

    <div class="right_col" role="main" style="min-height: 949px;">

        <div class="page-title">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <h3>Liste des diplômes</h3>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                    <div class="x_title">

                        {{link_to('/ajouter_diplome','Ajouter un diplôme',['class'=>'btn btn-success'])}}

                        <ul class="nav navbar-right panel_toolbox">

                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>

                            </li>

                        </ul>

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

                    </div>

                    <div class="x_content">

                        <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                            @if (count($Diplomes)>0)

                                <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1031px;">

                                    <thead>

                                    <tr role="row">

                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Position: activate to sort column ascending">ID</th>

                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Position: activate to sort column ascending">libelle diplôme</th>

                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Age: activate to sort column ascending">Action</th></tr>

                                    </thead>

                                    <tbody>

                                    @foreach($Diplomes as $Diplome)

                                        <tr>

                                            <td><a href="{{url('Diplome/'.$Diplome->id_diplome.'/show')}}"><b>{{++$id_diplome}}<b/></a></td>

                                            <td>{{$Diplome->libelle_diplome}}</td>

                                            <td>
                                                <a href="{{url('Diplome/'.$Diplome->id_diplome.'/edit')}}"><i data-toggle="tooltip" title="Modifier" class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                                                <a href="{{url('Diplome/'.$Diplome->id_diplome.'/supprimer')}}"> <i data-toggle="tooltip" title="Supprimer" id="delete" class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                                            </td>

                                        </tr>

                                    @endforeach

                                    </tbody>

                                </table>

                            @else

                                <div class="alert alert-info alert-dismissible fade in" role="alert">

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>

                                    </button>

                                    <strong><b>Liste vide!</b></strong><b> Votre liste des diplôme est vide.</b>

                                </div>

                            @endif

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


@endsection

