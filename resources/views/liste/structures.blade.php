@extends('layouts.entete_amd')
@section('content')
<div class="right_col" role="main" style="min-height: 949px;">
   <div class="page-title">
      <div class="title_left">
         <h3>Liste des structures</h3>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               {{link_to('/ajouter_structure','Ajouter une structure',['class'=>'btn btn-success'])}}
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
            @if (count($structures)>0)
            <div class="x_content">
               <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                  <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1031px;">
                     <thead>
                        <tr role="row">
                           <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width:40px;" aria-sort="ascending" aria-label="Id: activate to sort column descending">Id</th>
                           <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 253px;" aria-label="Nom: activate to sort column ascending">Nom de la structure</th>
                           <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Nom: activate to sort column ascending">Abréviation</th>
                           <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Nom: activate to sort column ascending">Numéro fix</th>
                           <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 120px;" aria-label="Nom: activate to sort column ascending">Adresse</th>
                           <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Nom: activate to sort column ascending">Site web</th>
                           <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Age: activate to sort column ascending">E-mail</th>
                           <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Nom: activate to sort column ascending">Responsable</th>
                           <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 40px;" aria-label="Nom: activate to sort column ascending">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($structures as $structure)
                        <tr>
                           <td><a href="{{url('structure/'.$structure->id_st.'/show')}}"><b>{{$structure->id_st}}<b/></a></td>
                           <td>{{$structure->nom_st}}</td>
                           <td>{{$structure->abrev_st}}</td>
                           <td>{{$structure->tel_fix_st1}}</td>
                           <td>{{$structure->adresse_st}}</td>
                           <td>{{$structure->site_web_st}}</td>
                           <td>{{$structure->email_st}}</td>
                           <td>{{$structure->respon_st}}</td>
                    
                           <td><a href="{{url('structure/'.$structure->id_st.'/edit')}}"><i data-toggle="tooltip" title="Modifier" class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>  <a href="{{url('structure/'.$structure->id_st.'/supprimer')}}"> <i data-toggle="tooltip" title="Supprimer" class="fa fa-trash fa-2x" aria-hidden="true"></i></a></td>
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
               <strong><b>Liste vide!</b></strong> <b> Votre liste des structures est vide.</b>
            </div>
            @endif
         </div>
      </div>
   </div>
</div>
@endsection