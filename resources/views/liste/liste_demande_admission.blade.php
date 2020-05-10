@extends('layouts.entete_amd')



@section('content')

<div class="right_col" role="main" style="min-height: 949px;">

  <div class="page-title">

    <div class="col-md-12 col-sm-12 col-xs-12">

      <h3>Liste des demandes d'inscription</h3>

    </div>

  </div>

  <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">

      <div class="x_panel">

        <div class="x_title">

          {{link_to('/ajouter_demande_admission','Ajouter une demande d\'inscription',['class'=>'btn btn-success'])}}

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
            @if (count($prospects)>0)
                            <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1031px;">

                <thead>

                  <tr role="row">

                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Position: activate to sort column ascending">ID</th>

                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Position: activate to sort column ascending">Civilité</th>

                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Office: activate to sort column ascending">Nom et prenom</th>

                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;" aria-label="Age: activate to sort column ascending">Nationalité</th>

                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Age: activate to sort column ascending">Ville</th>

                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Age: activate to sort column ascending">Etablissement</th>

                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Age: activate to sort column ascending">Formations</th>

                    <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 60px;" aria-label="Age: activate to sort column ascending">Action</th></tr>

                  </thead>

                  <tbody>
                  {dd($prospects)}
                    @foreach ($prospects as $key => $prospect)
                      <tr>

                      <td><a href="{{ url('prospect/'. $prospect->id_prospect.'/show') }}" data-toggle="tooltip" title="Afficher"><b>{{++$id_pros}}<b/></a></td>

                      <td>{{ $prospect->civilite}}</td>

                      <td>{{ $prospect->nom}} {{ $prospect->prenom}}</td>

                      <td>{{ $prospect->nationalite}}</td>

                      <td>{{ $prospect->ville}}</td>

                      <td>{{ $prospect->etablissement}}</td>

                      @foreach ($formations as $formation)
                       
                        @if ($formation->id_formation == $prospect->id_formation)

                          <td>{{$formation->libelle_formation}} </td>

			                   @endif

                      @endforeach

                      <td><a href="{{url('prospect/'. $prospect->id_prospect.'/edit')}}"><i class="fa fa-pencil-square fa-2x" aria-hidden="true" data-toggle="tooltip" title="Modifier"></i></a>

                      <a href="{{url('prospect/'. $prospect->id_prospect.'/supprimer')}}"> <i class="fa fa-trash fa-2x" aria-hidden="true" data-toggle="tooltip" title="Supprimer"></i></a>

                        @if( $prospect->etat_bac == 'avec_bac')

                         <a href="{{url('prospect_diplomes/'. $prospect->id_prospect.'/showProspectDiplomes')}}" data-toggle="tooltip" title="Consulter les diplomes"> <i class="fa fa-file fa-2x" aria-hidden="true"></i></a>

                        @endif

                       </td>

                     </tr>

                    @endforeach

                  </tbody>

                </table>
            @endif

            </div>
          </div>

        </div>

      </div>

    </div>

  </div>
@endsection

