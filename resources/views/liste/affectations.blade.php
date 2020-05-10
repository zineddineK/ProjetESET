@extends('layouts.entete_amd')



@section('content')

<div class="right_col" role="main" style="min-height: 949px;">

  <div class="page-title">

    <div class="col-md-12 col-sm-12 col-xs-12">

      <h3>Liste des affectations au projets</h3>

    </div>

  </div>

  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">

      <div class="x_panel">

        <div class="x_title">

          {{link_to('/projet','Ajouter une affectation',['class'=>'btn btn-success'])}}

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

            @endif

          </div>

          <div class="clearfix"></div>

        </div>

        <div class="x_content">

        <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

          @if (count($affect_colla_projets)>0)

            <table id="datatable-buttons"  class="table table-striped table-bordered table-condensed dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1033px;">

              <thead>

                <tr role="row">

                  <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Position: activate to sort column ascending">ID</th>

                  <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Position: activate to sort column ascending">Projet</th>

                  <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Office: activate to sort column ascending">Nom et prenom</th>

                  <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Age: activate to sort column ascending">Date debut</th>

                  <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Age: activate to sort column ascending">Date fin</th>

                  <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 60px;" aria-label="Age: activate to sort column ascending">Action</th></tr>

                </thead>

                <tbody>

                  @foreach($affect_colla_projets as $affect_colla_projet)

                  <tr>

                    <td><a href="{{url('affectation/'.$affect_colla_projet->id_af_co_pro.'/show')}}"><b>{{++$id_aff_projet}}<b/></a></td>

                      @foreach ($projets as $projet)

                      @if ($projet->id_proj_pros == $affect_colla_projet->id_proj_pros)

                          <td>{{$projet->libelle_proj_pros}}</td>

                        @endif

                      @endforeach

                      @foreach ($collaborateurs as $collaborateur)

                      @if ($collaborateur->id_collaborateur == $affect_colla_projet->id_collaborateur)

                          <td>{{$collaborateur->nom_colla}} {{$collaborateur->prenom_colla}}</td>

                        @endif

                      @endforeach

                    <td>{{$affect_colla_projet->date_fin_proj_pros}}</td>

                    <td>{{$affect_colla_projet->date_deb_proj_pros}}</td>

                    <td><a href="{{url('affectation/'.$affect_colla_projet->id_af_co_pro.'/edit')}}"><i data-toggle="tooltip" title="Modifier" class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a> <a href="{{url('affectation/'.$affect_colla_projet->id_af_co_pro.'/supprimer')}}"> <i data-toggle="tooltip" title="Supprimer" class="fa fa-trash fa-2x" aria-hidden="true"></i></a></td>

                  </tr>

                  @endforeach

                </tbody>

              </table>

            @else

              <div class="alert alert-info alert-dismissible fade in" role="alert">

                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>

                </button>

                <strong><b>Liste vide!</b></strong> <b> Votre liste des affectations des projets est vide.</b>

              </div>

          @endif

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>



  @endsection

