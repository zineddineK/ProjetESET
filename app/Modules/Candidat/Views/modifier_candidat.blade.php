@extends('layouts.entete_amd')



@section('content')

    <div class="right_col" role="main" style="min-height: 949px;">

        <div class="">

            <div class="page-title">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <h3>Consultation d'un candidat</h3>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="x_panel">

                        <div class="animate x_conten">  

                            {!! Form::open(['method' => 'PATCH', 'url' => route('candidats.update',$candidat) ,'class' => 'form-horizontal form-label-left','files' => 'true']) !!}

                            {{ csrf_field() }} 

                            <blockquote>Vous êtes sur point de modifier les informations qui concerne l'candidat : <b>{{ $candidat->nom_candidat}} {{ $candidat -> prenom_candidat}}</b></blockquote>

                                <div class="clearfix">
                          @if ($errors->count()>0)
                              <div class="alert alert-danger">
                                <strong>Candidat non ajouter, veuillez remplire les champs obligatoire (*) et verifier le format des champs</strong>
                                    <ul>
                                      @foreach ($errors->all() as $message)
                                         <li>{{$message}}</li>
                                      @endforeach
                                      </ul>
                              </div>
                          @endif
                        </div>

                        <details open>

                            <div class="item form-group">   
                                     {!! Form::label('inputname',' Photo ', ['class'=> 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    
                                     <img src="{{URL::asset($candidat->photo)}}" width="200" height="200" class="css-class" alt="Photo portrait">
                                     
                                </div>
                            </div>
    
                                    <summary style="cursor:pointer; font-family: 'Helvetica'; 
                                    font-size: 20px; color: #212121 "> Information Personnelles : </summary><br>
                                    

                                    <div class="item form-group">

                                      {!! Form::label('inputname', 'civilite *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                      <div class="col-md-6 col-sm-6 col-xs-12 ">

                                        @if($candidat->civilite === "M")

                                        {!! Form::radio('civilite', "M", true) !!} M. <br/>

                                        {!! Form::radio('civilite', 'F') !!} Mme.

                                        @else

                                        {!! Form::radio('civilite', 'F',true) !!} M.

                                        {!! Form::radio('civilite', "M") !!} Mme. <br/>

                                        @endif

                                      </div>

                                    </div>


                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Nom ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('nom_candidat',$candidat -> nom_candidat, ['class' => 'form-control col-md-7 col-xs-12', '' => '']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Prénom ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('prenom_candidat',$candidat -> prenom_candidat, ['class' => 'form-control col-md-7 col-xs-12', '' => '']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Adresse E-mail *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('email_candidat',$candidat -> email_candidat, ['class' => 'form-control col-md-7 col-xs-12', '' => '']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname','N° C.I.N *', ['class'=> 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('cin',$candidat -> cin, ['class' => 'form-control col-md-7 col-xs-12','' => '']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Nationalité ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('natio',$candidat -> natio, ['class' => 'form-control col-md-7 col-xs-12','' => '']) !!}

                                    </div>

                                </div>


                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Téléphone mobile *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('telephone_mobile',$candidat -> telephone_mobile, ['class' => 'form-control col-md-7 col-xs-12','' => '']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Date de naissance ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::date('date_de_naissance',$candidat -> date_de_naissance, ['class' => 'form-control col-md-7 col-xs-12','' => '']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Lieu de naissance  ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('lieu_de_naissance',$candidat -> lieu_de_naissance, ['class' => 'form-control col-md-7 col-xs-12','' => '']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Statut marital ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::select('statut_marital',$status,$candidat -> statut_marital, ['class' => 'form-control col-md-7 col-xs-12','' => '']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname','Nombre d\'enfant', ['class'=> 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('nbr_enfant',$candidat -> nbr_enfant, ['class' => 'form-control col-md-7 col-xs-12','' => '']) !!}

                                    </div>
                                </div>

                                <div class="item form-group">   
                                     {!! Form::label('inputname',' Photo ', ['class'=> 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    
                                    {{ Form::file('photo', ['class' => 'form-control col-md-7 col-xs-12']) }}
                                    </div>
                                </div>


                                
                            
                            </details>
                            <br>
                                <details>
                                    <summary style="cursor:pointer; font-family: 'Helvetica'; 
                                    font-size: 20px; color: #212121"> Contacts : </summary><br>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Adresse ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('adresse', $candidat->adresse, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Adresse']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Pays de Résidence ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('pays_resid', $candidat->pays_resid, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Pays de residence']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Ville Actuelle ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('ville', $candidat->ville, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Ville Actuelle']) !!}

                                    </div>

                                </div>
                            </details>
                            <br>

                                <details>
                                    <summary style="cursor:pointer; font-family: 'Helvetica'; 
                                    font-size: 20px; color: #212121"> Parcours Scolaires : </summary><br>
    
                            <div class="parcours">
                                <div class="row" >
                                    <div class="col-md-12">
                                        <div class="col-sm-3">
                                            {!! Form::label('inputname', 'Choisissez votre niveau d\'étude') !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::select('niveau_etude',$niveaux,null,['class' => 'form-control','placeholder' => 'Choisir niveau','id'=>'niveau']) !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::label('inputname', 'Date d\'obtention') !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::date('date_obtenation', $candidat->date_obtenation, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Date d\'obtention']) !!}
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-sm-3">
                                            {!! Form::label('inputname', 'Diplôme') !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::select('diplome',$diplomes, $candidat->diplomes, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Diplôme','id'  =>  'diplomes']) !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::label('inputname', 'Etablissement ') !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::text('etablissement_dip', $candidat->etablissement_dip, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Etablissement']) !!}
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-sm-3">
                                            {!! Form::label('inputname', 'Spécialité ') !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::text('specialite', $candidat->specialite, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Spécialité']) !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::label('inputname', 'Ville ') !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::text('ville', $candidat->ville, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Ville']) !!}
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <a href="#" id="add">more</a>
                                </div>
                                </details>

                                <br>

                                <details>
                                    <summary style="cursor:pointer; font-family: 'Helvetica'; 
                                    font-size: 20px; color: #212121"> Parcours Professionnel : </summary><br>
                                    
                                    <div class="row">

                                    <div class="col-md-12">
                                        <div class="col-sm-3">
                                            {!! Form::label('inputname', 'Nom de l\'entreprise') !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::text('entreprise_exp',$candidat->entreprise_exp,['class' => 'form-control','placeholder' => 'Veuillez saisir nom de l\'entreprise']) !!}
                                            
                                        </div>
                                         <div class="col-sm-1">
                                            {!! Form::label('inputname', 'Période de ') !!}
                                            
                                        </div>
                                        <div class="col-sm-2">
                                            {!! Form::date('date_d', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => '...']) !!}
                                            
                                        </div> 

                                        <div class="col-sm-1">
                                            {!! Form::label('inputname', 'à : ') !!}
                                            
                                        </div>

                                        <div class="col-sm-2">
                                            {!! Form::date('date_f', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => '...']) !!}
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <br>

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="col-sm-3">
                                            {!! Form::label('inputname', 'Titre du poste') !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::text('titre_poste', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Titre du poste']) !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::label('inputname', 'Mission ') !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::textArea('mission', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Mission'],'cols=20','rows=10') !!}
                                            
                                        </div> 
                                        
                                    </div>
                                    
                                </div>
                            <br>
                         </details>
                                     <br>
                            <details>
                                    <summary style="cursor:pointer; font-family: 'Helvetica'; 
                                    font-size: 20px; color: #212121"> Certificats : </summary>

                                 
                                    <br>

                                    <div class="row">

                                    <div class="col-md-12">
                                        <div class="col-sm-3">
                                            {!! Form::label('inputname', 'Entreprise ') !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::select('entreprises',$entreprises,null,['class' => 'form-control','placeholder' => 'Choisir entreprise']) !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::label('inputname', 'Titre') !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::text('titre_certif', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Titre']) !!}
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <br>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-sm-3">
                                            {!! Form::label('inputname', 'Option') !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::text('option_certif', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Option']) !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::label('inputname', 'Année d\'obtention ') !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::number('annee_certif', null, ['class' => 'form-control col-md-7 col-xs-12', 'min=1950', 'max=2018','placeholder' => 'Année d\'obtention']) !!}
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <br>

                            </details>


                            <div class="ln_solid"></div>

                            <div class="form-group">

                                <div class="col-md-6 col-md-offset-3 ">

                                    {!! Form::reset("Annuler", ['class' => 'btn btn-warning']) !!}

                                    {!! Form::submit("Modifier", ['class' => 'btn btn-success']) !!}

                                    {{link_to(URL::previous(), 'Retour', ['class'=>'btn btn-primary'])}}

                                </div>

                            </div>

                            {!! Form::close() !!}



                </div>



            </div>

        </div>

    </div>



@endsection

