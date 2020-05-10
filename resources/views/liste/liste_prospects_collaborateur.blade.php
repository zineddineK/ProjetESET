@extends('layouts.entete_amd')



@section('content')

<div class="right_col" role="main" style="min-height: 949px;">

  <div class="page-title">

    <div class="col-md-12 col-sm-12 col-xs-12">

      <h3>Liste d'affactations au projets</h3>

    </div>

  </div>

  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">

      <div class="x_panel">

        <div class="x_title">

          <ul class="nav navbar-right panel_toolbox">

            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

            </li>

            <li><a class="close-link"><i class="fa fa-close"></i></a>

            </li>

          </ul>

          <div class="clearfix">

            @if (session('status1'))

            <div class="alert alert-danger">

              {{ session('status1') }}

            </div>

            @endif

          </div>

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

          @if (count($proj_collabs)>0)

          <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" >

            <thead>

              <tr role="row">

                <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Position: activate to sort column ascending">ID</th>

                <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Position: activate to sort column ascending">Nom du rojet</th>

                 <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Position: activate to sort column ascending">Date d'affectation</th>

                <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;" aria-label="Age: activate to sort column ascending">Date début</th>

                <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Age: activate to sort column ascending">Date fin</th>

                <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Age: activate to sort column ascending">Action</th>

              </tr>

            </thead>

            <tbody>

              @foreach($proj_collabs as $proj_collab)

              <tr>

                <td><b>{{++$id_p}}<b/></td>

                <td>{{$proj_collab->nom_crm_proj_pros}}</td>

                <td>{{$proj_collab->date_ajout}}</td>

                <td>{{$proj_collab->date_deb_crm}}</td>

                <td>{{$proj_collab->date_fin_crm}}</td>

                <td><a data-toggle="tooltip" title="Liste des prospects" href="{{url('liste_prospects_projet/'.$proj_collab->id_crm_affect.'/liste')}}"><i class="fa fa-file-text fa-2x"></i></a></td>

              </tr>

              @endforeach

            </tbody>

          </table>

          @else

          <div class="alert alert-info alert-dismissible fade in" role="alert">

            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>

            </button>

            <strong><b>Liste vide!</b></strong><b> Votre liste de vos affecations au projets est vide.</b>

          </div>

          @endif

        </div>

      </div>

    </div>

  </div>

</div>

</div>

@endsection

