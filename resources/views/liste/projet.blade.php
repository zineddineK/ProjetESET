@extends('layouts.entete_amd')



@section('content')

<div class="right_col" role="main" style="min-height: 949px;">

  <div class="page-title">

    <div class="col-md-12 col-sm-12 col-xs-12">

      <h3>Liste des projets</h3>

    </div>

  </div>

  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">

      <div class="x_panel">

        <div class="x_title">

          {{link_to('/ajouter_projet','Ajouter un nouveau projet',['class'=>'btn btn-success'])}}

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

          @elseif (session('status1'))

            <div class="alert alert-danger">

              {{ session('status1') }}

            </div>

            @endif

          </div>

          <div class="clearfix"></div>

        </div>

        @if (count($projets)>0)

          <div class="x_content">

            <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

            <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1031px;">

                <thead>

                  <tr role="row">

                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 10px;" aria-label="Position: activate to sort column ascending">ID</th>

                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 100px;" aria-label="Position: activate to sort column ascending">Projet</th>

                    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 60px;" aria-label="Office: activate to sort column ascending">Date début</th>

                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;" aria-label="Age: activate to sort column ascending">Date fin</th>

                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;" aria-label="Age: activate to sort column ascending">Etat d'activation</th>

                    <th class="sorting" tabindex="0"  aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Age: activate to sort column ascending">Action</th></tr>

                  </thead>

                  <tbody>

                    @foreach($projets as $projet)

                    <tr>

                      <td><a href="{{url('projet/'.$projet->id_proj_pros.'/show')}}"><b>{{++$id_projet}}<b/></a></td>

                      <td>{{$projet->libelle_proj_pros}}</td>

                      <td>{{$projet->date_deb_proj_pros}}</td>

                      <td>{{$projet->date_fin_proj_pros}}</td>

                      <td>{{$projet->activation}}</td>

                      <td>

                      @if ($projet->activation === "activer")

                          <a data-toggle="tooltip" title="Désactiver" href="{{url('projet/'.$projet->id_proj_pros.'/desactiver')}}"> <i class="fa fa-check-square fa-2x" aria-hidden="true"> </i></a>

                        @elseif ($projet->activation === "désactiver")

                      <a data-toggle="tooltip" title="Activer" href="{{url('projet/'.$projet->id_proj_pros.'/activer')}}"> <i class="fa fa-square fa-2x" aria-hidden="true"> </i></a>

                      @endif

                      <a data-toggle="tooltip" title="Affecter" href="{{url('projet/'.$projet->id_proj_pros.'/affectation')}}"> <i class="fa fa-plus-square fa-2x" aria-hidden="true"> </i></a>

                      <a data-toggle="tooltip" title="Modifier" href="{{url('projet/'.$projet->id_proj_pros.'/edit')}}"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>  <a data-toggle="tooltip" title="Supprimer" href="{{url('projet/'.$projet->id_proj_pros.'/supprimer')}}"> <i class="fa fa-trash fa-2x" aria-hidden="true"></i>

                      </a>

                    </td>

                    </tr>

                    @endforeach

                  </tbody>

                </table>

              </div>

              </div>

              @else

                <div class="alert alert-info alert-dismissible fade in" role="alert">

                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>

                  </button>

                  <strong><b>Liste vide!</b></strong><b> Votre liste des projets est vide.</b>

                </div>

          @endif

        </div>

      </div>

    </div>

  </div>



  @endsection

