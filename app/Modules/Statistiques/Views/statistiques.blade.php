@extends('layouts.entete_amd')



@section('content')

<!-- page content -->

<div class="right_col" role="main" style="min-height: 1381px;">

	<!-- top tiles -->

	<div class="">
		<div class="row top_tiles">

			<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="tile-stats">
					<div class="icon"><i class="fa fa-folder"></i></div><br>
					<div class="count">{{$nbrprospects}}</div>
					<h3>Demande d'inscription</h3>
                    <p>Nombre de prospects existant.</p>
				</div>
			</div>
			<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="tile-stats">
					<div class="icon"><i class="fa fa-group"></i></div><br>
					<div class="count">{{$nbrcollabos}}</div>
					<h3>Collaborateurs</h3>
                    <p>Nombre de collaborateurs.</p>
				</div>
			</div>
			<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="tile-stats">
					<div class="icon"><i class="fa fa-phone"></i></div><br>
					<div class="count">{{$appelEffe}}</div>
					<h3>Appele(s) effectué</h3>
					<p>Nombre d'appel effectué.</p>
				</div>
			</div>
			<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="tile-stats">
					<div class="icon"><i class="fa fa-folder-open"></i></div><br>
					<div class="count">{{$appeleIntce}}</div>
					<h3>Appel en intance</h3>
					<p>Nombre d'appels en intance .</p>
				</div>
			</div>
		</div> 


		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
					<h4>Appels effectués et appels en instance</h4>
					<hr>
						<div class="clearfix"></div>
						{!! $app->render();!!}
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
					<h4>Taux des états d'appels</h4>
					<hr>
						<div class="clearfix"></div>
						{!! $tauxapp->render() !!}
					</div>
					
				</div>
			</div>
			</div>
			
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
						<h4>Nombre d'appels effectués</h4>
						<hr>
							<div class="clearfix"></div>
							{!! $nbrAppel->render() !!}
						</div>
						
					</div>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="x_panel">	
						<div class="x_title">
						<h4>Taux des appeles par mois</h4>
						<hr>
							{!!$AppelParMois->render()!!}
						</div>
					</div>
				</div>
			</div>


			<div class="row">


				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="x_panel">	
						<div class="x_title">
						<h4>Taux des civilités</h4>
						<hr>
							{!!$tauxcivi->render()!!}
						</div>
					</div>
				</div>
					<div class="col-xs-12">
					<div class="x_panel">
						<div class="x_title">
						<h4>Nombre de prospects par établissement</h4>
						<hr>
							<div class="clearfix"></div>
							{!!$tauxetab->render()!!}
						</div>
						
					</div>
				</div>
			</div>

		</div>
	</div>

</div>

<!-- /page content -->



@endsection
