@extends('layouts.entete_amd')



@section('content')



<div class="right_col" role="main" style="min-height: 949px;">

	<div class="">

		<div class="page-title">

			<div class="col-md-12 col-sm-12 col-xs-12">

				<h3>Liste d'affectation</h3>

			</div>

		</div>

		<div class="row">

			<div class="col-md-12 col-sm-12 col-xs-12">

				<div class="x_panel">

					<div class="animate x_conten">

						{!! Form::open(['method' => 'POST', 'url' => '/nouvelle_projet', 'class' => 'form-horizontal form-label-left']) !!}

						{{ csrf_field() }}

						<span class="section">Les informations du projet</span>

						<div class="item form-group">

							{!! Form::label('inputname', 'Nom de projet', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

							<div class="col-md-6 col-sm-6 col-xs-12">

								{!! Form::text('nom', $crmdata->nom_crm_proj_pros, ['class' => 'form-control col-md-7 col-xs-12',  'placeholder' => 'Nom du projet','readonly' => 'readonly']) !!}

							</div>

						</div>

						<div class="item form-group">

							{!! Form::label('inputname', 'Collaborateur', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

							<div class="col-md-6 col-sm-6 col-xs-12">

								{!! Form::text('nom', $nom_complet_collaborateur->first(), ['class' => 'form-control col-md-7 col-xs-12','readonly' => 'readonly']) !!}

							</div>

						</div>


						<div class="item form-group">

							{!! Form::label('inputname', 'Date debut', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

							<div class="col-md-6 col-sm-6 col-xs-12">

								{!! Form::text('date_debut', $crmdata->date_deb_crm, ['class' => 'form-control col-md-7 col-xs-12',  'placeholder' => 'Date debut du projet','readonly' => 'readonly']) !!}

							</div>

						</div>

						<div class="item form-group">

							{!! Form::label('inputname', 'Date fin', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

							<div class="col-md-6 col-sm-6 col-xs-12">

								{!! Form::text('date_fin', $crmdata->date_fin_crm, ['class' => 'form-control col-md-7 col-xs-12',  'placeholder' => 'Date fin du projet','readonly' => 'readonly']) !!}

							</div>

						</div>

							<div class="item form-group">

								{!! Form::label('inputname', 'Description', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

								<div class="col-md-6 col-sm-6 col-xs-12">

									{!! Form::textarea('description', $crmdata->remarque_crm, ['class' => 'form-control col-md-7 col-xs-12',  'placeholder' => 'Les objectifs du projet','readonly' => 'readonly']) !!}

								</div>

							</div>

						</div><br>

						<span class="section">Liste des prospects affectés </span>

						<div id="datatable-buttons_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer" align="center">

							<table  class="table table-striped table-bordered table-condensed dataTable  " >

								<thead>

									<tr role="row">

									<th>Civilité</th>

									<th>Nom et prenom</th>

									<th>Nationalité</th>

									<th>Ville</th>

									<th>Etablissement</th>

									<th>action</th>

								</thead>

								<tbody>

									@foreach ($nom_pros as $key => $nom_pros)

										<tr>

											<td>{{$nom_pros->civilite}}</td>

											<td>{{$nom_pros->nom}} {{$nom_pros->prenom}}</td>

											<td>{{$nom_pros->nationalite}}</td>

											<td>{{$nom_pros->adresse}}</td>

											<td>{{$nom_pros->cin}}</td>

											<td><a data-toggle="tooltip" title="Appeler" href="{{url('ajouter_prise_rdv/'.$nom_pros->id_prospect.'/appel')}}"><i class="fa fa-phone-square "></i></a></td>

										</tr>

									@endforeach

								</tbody>

							</table>

							</div>

						</div>

						<div class="ln_solid"></div>

						<div class="form-group">

							<div class="col-md-6 col-md-offset-3 ">

								{{link_to(URL::previous(), 'Retour', ['class'=>'btn btn-primary'])}}

							</div>

						</div>

						{!! Form::close() !!}

					</div>

				</div>

			</div>



		</div>

	</div>

</div>

<!-- Modal -->

<div id="myModal" class="modal fade bd-example-modal-xl" role="dialog" >

  <div class="modal-dialog modal-lg">



    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Interface CRM - Collaborateur</h4>

      </div>

			<form class=""  method="post">

				<div class="modal-body">

	        <div class="row">

	        	<div class="col-md-8">

							<div class="row">

								<div class="col-md-10 info">

									<div class="row">

										<div class="col-md-12 ">

											<span class="section">Info Personelle</span>

											<div class="row">

												<div class="col-md-6">

													<span style="color:black;">Nom et Prenom :</span><h4>Hicham Maaqoul</h4>

												</div>

												<div class="col-md-6">

													<span style="color:black;">Tel :</span><h4>0607654257</h4>

												</div>

											</div>

											<div class="row">

												<div class="col-md-6">

													<span style="color:black;">Email :</span> <h4 >hicham.maaqoul@gmail.com</h4>

												</div>

												<div class="col-md-6">

													<span style="color:black;">Ville : </span><h4>Kenitra</h4>

												</div>

											</div>

										</div>

										<div class="col-md-12 table-responsive">

											<span class="section">Info Scolaire</span>

											<table class="table table-condensed table-bordered">

												<thead>

													<th>Diplome</th>

													<th>Etablissement</th>

													<th>Filiere</th>

													<th>ville Eta.</th>

													<th>Date d'obtention</th>

												</thead>

												<tbody>

													<tr>

														<td>Ingenierie</td>

														<td>Ismag</td>

														<td>Genie Info</td>

														<td>Rabat</td>

														<td>11/09/2017</td>

													</tr>

												</tbody>

											</table>

										</div>

										<div class="col-md-12">

											<div class="col-md-6">

												<span style="color:black;">Concour:</span><input type="date" class="form-control" name="" value="">

											</div>

											<div class="col-md-6">

												<span style="color:black;">Filiere:</span><br><input type="radio" class="" name="" value=""> genie info | <input type="radio" class="" name="" value=""> Management

											</div>

										</div>

										<div class="col-md-12">

											<span class="section">Observation</span>

											<textarea name="name" rows="5" cols="200"></textarea>

										</div>

									</div>

								</div>

								<div class="col-md-2 timer text center">

									<span class="section">Compteur</span>

									<div class="row">

										<div class="col-md-12">

											 <input id="compteur" name="compteur" class="form-control" type="text" value="00 : 00">

											 <input style="margin-top:10px;" type="button" class="btn btn-danger" data-dismiss="modal" onclick="reinitialiser();" value="fin"/>

										</div>

										<div class="col-md-12">

											<span class="section" style="margin-top:32px;">valider</span>

											<div class="col-md-12">

										 		<input type="radio" name="" value=""> B.V

											</div>

											<div class="col-md-12">

 											 <input type="radio" name="" value=""> OK

 										 </div>

										 <div class="col-md-12">

											 <input type="radio" name="" value=""> F.N

										 </div>

										 <div class="col-md-12">

											 <input type="radio" name="" value=""> P.R

										 </div>

										</div>

									</div>

								</div>

							</div>

	        	</div>

						<div class="col-md-4 script text-center">

							<span class="section">Script</span>

							<textarea name="name" rows="20" cols="100"></textarea>

						</div>

	        </div>

	      </div>

			</form>

      <div class="modal-footer">

        <button type="button" class="btn btn-default" onclick="arreter();" data-dismiss="modal">fermer</button>

      </div>

    </div>



  </div>

</div>

@endsection

