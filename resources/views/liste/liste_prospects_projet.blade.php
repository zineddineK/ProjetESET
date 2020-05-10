@extends('layouts.entete_amd')

@section('content')
<div class="right_col" role="main" style="min-height: 949px;">
  <div class="page-title">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <h3>Liste d'affectations aux projets</h3>
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
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div  class="dataTables_wrapper form-inline  no-footer">
            @if (count($prospect_crm)>0)
            <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" >
              <thead>
                <tr role="row">
                  <th class="sorting"  class="col-md-2" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Position: activate to sort column ascending">ID</th>
                  <th class="sorting" class="col-md-2" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Position: activate to sort column ascending">Nom et prenom</th>
                  <th class="sorting" class="col-md-2" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;" aria-label="Age: activate to sort column ascending">Nationalité</th>
                  <th class="sorting"  class="col-md-2" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;" aria-label="Age: activate to sort column ascending">Ville</th>
                  <th class="sorting" class="col-md-2" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px;" aria-label="Age: activate to sort column ascending">Etablissment</th>
                  <th class="sorting" class="col-md-2" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Age: activate to sort column ascending">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($prospect_crm as $prospect_crm)
                <tr>
                  <td><b>{{++$id_p}}<b/></td>
                  <td>{{$prospect_crm->nom}} {{$prospect_crm->prenom}}</td>
                  <td>{{$prospect_crm->nationalite}}</td>
                  <td>{{$prospect_crm->ville}}</td>
                  <td>{{$prospect_crm->etablissement}}</td>
                  <td><input type="button" class="btn btn-primary modalbox" data-crm="{{$crm}}" data-id="{{$prospect_crm->id_pros}}"  name="prospect_id"  id="prospect_id" value="A"></td>
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

<div class="modal fade"  id="myModal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content" style="background: #eaeaea;" id="modal_content">

    </div>
  </div>
</div>

@endsection
