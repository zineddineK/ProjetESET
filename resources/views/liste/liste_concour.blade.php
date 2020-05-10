@extends('layouts.entete_amd')
@section('content')
<div class="right_col" role="main" style="min-height: 949px;">
   <div class="page-title">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <h3>Listes des concours</h3>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               {{link_to('/ajouter_concour','Ajouter un concour',['class'=>'btn btn-success'])}}
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
               <div class="clearfix">
                  @if (session('status1'))
                  <div class="alert alert-danger">
                     {{ session('status1') }}
                  </div>
                  @endif
               </div>
               <div class="clearfix"></div>
            </div>
            <div class="x_content">
               <div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                  @if (count($concours)>0)
                  <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1031px;">
                     <thead>
                        <tr role="row">
                           <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Position: activate to sort column ascending">ID</th>
                           <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Office: activate to sort column ascending">Structure</th>
                           <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Position: activate to sort column ascending">Nom du concour</th>
                           <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 60px;" aria-label="Position: activate to sort column ascending">Date et Heure du concour</th>
                           <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 60px;" aria-label="Age: activate to sort column ascending">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($concours as $concour)
                        <?php
                           $date=strtotime($concour->date_concour);
                           $date=date('d-m-Y',$date);
                           $time=strtotime($concour->heure_concour);
                           $time = date('H:i',$time);
                           ?>
                        <tr>
                           <td><a href="{{url('concour/'.$concour->id_concour.'/show')}}"><b>{{++$id}}<b/></a></td>
                           @foreach ($structures as $structure)
                           @if ($structure->id_st == $concour->id_st)
                           <td>{{$structure->abrev_st}}</td>
                           @endif
                           @endforeach
                           <td>{{$concour->libelle_concour}}</td>
                           <td>{{$date}}  {{$time}}</td>
                           <td>

                            @if ($concour->activation === "activer")

                                <a data-toggle="tooltip" title="Désactiver" href="{{url('concour/'.$concour->id_concour.'/desactiver')}}"> <i class="fa fa-check-square fa-2x" aria-hidden="true"> </i></a>

                              @elseif ($concour->activation === "désactiver")

                                 <a data-toggle="tooltip" title="Activer" href="{{url('concour/'.$concour->id_concour.'/activer')}}"> <i class="fa fa-square fa-2x" aria-hidden="true"> </i></a>

                            @endif

                                 <a href="{{url('concour/'.$concour->id_concour.'/edit')}}"><i data-toggle="tooltip" title="Modifier" class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a>
                                 <a href="{{url('concour/'.$concour->id_concour.'/supprimer')}}"> <i data-toggle="tooltip" title="Supprimer" class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  @else             
                  <div class="alert alert-info alert-dismissible fade in" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                     </button>
                     <strong><b>Liste vide!</b></strong><b> Votre liste des concours est vide.</b>
                  </div>
                  @endif
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection