  @extends('layouts.entete_amd')

@section('content')
<div class="right_col" role="main" style="min-height: 949px;">
  <div class="page-title">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <h3>Liste des diplômes du prospect</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          {{link_to('/ajouter_demande_admission','Ajouter une demande d\'inscription',['class'=>'btn btn-success'])}} {{link_to(URL::previous(), 'Retour', ['class'=>'btn btn-primary'])}}
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
            <table id="datatable-buttons"  class="table table-striped table-bordered table-condensed dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1033px;">
              <thead>
                <tr role="row">
                  <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Position: activate to sort column ascending">ID</th>
                  <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Position: activate to sort column ascending">Nom</th>
                  <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Office: activate to sort column ascending">Prenom</th>
                  <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;" aria-label="Age: activate to sort column ascending">CNE</th>
                  <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;" aria-label="Age: activate to sort column ascending">Diplome</th>
                  <th class="sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 100px;" aria-label="Age: activate to sort column ascending">Filiere</th>
                </thead>
                <tbody>
                 @for($i = 0; $i < count($prospect_diplomes); $i++)
                  <tr>
                  <td>{{++$id_prospect_diplomes}}</td>
                    <td>{{$prospects[0]-> nom}}</td>
                    <td>{{$prospects[0]-> prenom}}</td>
                    <td>{{$prospect_diplomes[$i] -> cne}}</td>
                    <td>{{$prospect_diplomes[$i] -> diplome}}</td>
                    <td>{{$prospect_diplomes[$i] -> filiere}}</td>
                  </tr>
                  @endfor
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
