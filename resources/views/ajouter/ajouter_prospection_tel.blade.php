@extends('layouts.entete_amd')
@section('content')
<form action="/nouvelle_affectation" method="post" class="form-inline">
   <div class="right_col" role="main" style="min-height: 949px;">
      <div class="">
         <div class="page-title">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <h3>Prospection téléphonique</h3>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="x_panel">
                  <div class="animate x_content">
                     <div class="row">
                        <span class="section">Affecter un collaborateur</span>
                        <h1 class="lead">
                           1) Première étape 
                           <hr>
                        </h1>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <label>Projet :</label>
                           <select class="form-control" id="projet" name="id_proj_pros">
                              <option selected="true" disabled="disabled">Choisissez un projet</option>
                              @foreach ($projets as $projet)
                              <option value="{{$projet->id_proj_pros}}">{{$projet->libelle_proj_pros}}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <label>Collaborateur :</label>
                           <select class="form-control" id="collaborateur" name="id_collaborateur" >
                              <option selected="true" disabled="disabled">Choisissez un collaborateur</option>
                           </select>
                        </div>
                     </div>
                     <br>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="item form-group">
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div id="dd">
                                    <label for="datedeb" class="control-label">Date debut :</label>
                                    <input required="required" id="datedeb" class="form-control" name="date_deb_crm" type="date" value="" />
                                 </div>
                              </div>
                           </div>
                           <div class="item form-group">
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                 <div id="df">
                                    <label for="datefin" class="control-label">Date fin :</label>
                                    <input required="required" id="datefin" class="form-control" name="date_fin_crm" type="date" value="" />
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4">
                        <div class="item form-group">
                           <label for="remarque" class="control-label col-md-12 col-sm-12 col-xs-12">Remarque :</label><br>
                           <textarea name="remarque_crm" rows="4" cols="30" class="form-control" placeholder="Remarque"></textarea>
                        </div>
                     </div>
                  </div>
               </div>
               <br>
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                     <div class="animate x_content">
                        <div class="row">
                           <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                              <div class="x_title">
                                 <span class="section">Liste des prospects</span>
                                 <h1 class="lead">2) Deuxiéme étape</h1>
                                <ul class="nav navbar-right panel_toolbox">
                                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                  </li>
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="#">Settings 1</a>
                                      </li>
                                      <li><a href="#">Settings 2</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                                  </li>
                                </ul>
                                <div class="clearfix"></div>
                              </div>
                              <div class="x_content">
                                 <div class="" role="tabpanel" data-example-id="togglable-tabs">
                               <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                 <li role="presentation" class=""><a href="#appeler" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Prospects déjà appelé ({{count($prospects_app)}})</a>
                                 </li>
                                 <li role="presentation" class=""><a href="#attente" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Prospects en attente ({{count($prospects_att)}})
                                 </a>
                                 </li>
                               </ul>
                               <div id="myTabContent" class="tab-content">
                                 <div role="tabpanel" class="tab-pane fade active in" id="appeler" aria-labelledby="home-tab">
                                    <input name="_token" value="{{ csrf_token() }}" type="hidden">
                                    <table id="example"  class="table table-striped table-bordered table-condensed dataTable">
                                       <tfoot  class="chercher">
                                          <tr>
                                             <td>Chercher par : </td>
                                             <th>Civilité</th>
                                             <th>Nom et Prenom</th>
                                             <th>Nationalité</th>
                                             <th>Ville</th>
                                             <th>Etablissement</th>
                                             <th>Formation</th>
                                          </tr>
                                       </tfoot>
                                       <thead>
                                          <tr role="row">
                                             <td><input type="checkbox"  onclick="checkAll()"  id="selectionner" ></td>
                                             <th>Civilité</th>
                                             <th>Nom et prenom</th>
                                             <th>Nationalité</th>
                                             <th>Ville</th>
                                             <th>Etablissement</th>
                                             <th>Formation</th>
                                          </tr>
                                       </thead>
                                       @foreach ($prospects_app as $key => $prospects)
                                       <tr>
                                          <td><span><input type="checkbox" value="{{$prospects->id_prospect}}" name="id_pros[]" ></span></td>
                                          <td>{{$prospects->civilite}}</td>
                                          <td>{{$prospects->nom}} {{$prospects->prenom}}</td>
                                          <td>{{$prospects->nationalite}}</td>
                                          <td>{{$prospects->ville}}</td>
                                          <td>{{$prospects->etablissement}}</td>
                                          <td>{{$prospects->libelle_formation}}</td>
                                       </tr>
                                       @endforeach
                                    </table>
                                    <br>
                                    <div class="col-md-6 col-md-offset-3">
                                       {!! Form::reset("Annuler", ['class' => 'btn btn-warning']) !!}
                                       {!! Form::submit("Affecter", ['class' => 'btn btn-success']) !!}
                                    </div>
                                 </div>

                                 <div role="tabpanel" class="tab-pane fade" id="attente" aria-labelledby="profile-tab">
                                   <input name="_token" value="{{ csrf_token() }}" type="hidden">
                                    <table id="example"  class="table table-striped table-bordered table-condensed dataTable">
                                       <tfoot  class="chercher">
                                          <tr>
                                             <td>Chercher par : </td>
                                             <th>Civilité</th>
                                             <th>Nom et Prenom</th>
                                             <th>Nationalité</th>
                                             <th>Ville</th>
                                             <th>Etablissement</th>
                                             <th>Formation</th>
                                          </tr>
                                       </tfoot>
                                       <thead>
                                          <tr role="row">
                                             <td><input type="checkbox"  onclick="checkAll()"  id="selectionner" ></td>
                                             <th>Civilité</th>
                                             <th>Nom et prenom</th>
                                             <th>Nationalité</th>
                                             <th>Ville</th>
                                             <th>Etablissement</th>
                                             <th>Formation</th>
                                          </tr>
                                       </thead>
                                       @foreach ($prospects_att as $key => $prospects)
                                       <tr>
                                          <td><span><input type="checkbox" value="{{$prospects->id_prospect}}" name="id_pros[]" ></span></td>
                                          <td>{{$prospects->civilite}}</td>
                                          <td>{{$prospects->nom}} {{$prospects->prenom}}</td>
                                          <td>{{$prospects->nationalite}}</td>
                                          <td>{{$prospects->ville}}</td>
                                          <td>{{$prospects->etablissement}}</td>
                                          <td>{{$prospects->libelle_formation}}</td>
                                       </tr>
                                       @endforeach
                                    </table>
                                    <br>
                                    <div class="col-md-6 col-md-offset-3">
                                       {!! Form::reset("Annuler", ['class' => 'btn btn-warning']) !!}
                                       {!! Form::submit("Affecter", ['class' => 'btn btn-success']) !!}
                                    </div>
                                 </div>
                              </div>
                             </div>
                          </div>
                         </div>
                       </div>
                      </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   </div>
   </div>
</form>
@endsection