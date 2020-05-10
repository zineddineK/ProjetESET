    @extends('layouts.entete_amd')



    @section('content')



        <div class="right_col" role="main" style="min-height: 949px;">

            <div class="">

                <div class="page-title">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <h3>Ajouter un(e) employee(e)</h3>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="x_panel">

                            <div class="animate x_conten">

                                {!! Form::open(['method' => 'POST','url' => '/nouvel_employee', 'class' => 'form-horizontal','files' => 'true' ]) !!}

                                {{ csrf_field() }}

                                <blockquote><i>Ce formulaire permet de créer le profil d'un(e) employee(e)</i></blockquote>

                               <div class="clearfix">
                                          @if ($errors->count()>0)
                                          <div class="alert alert-danger">
                                            <strong>employee non ajouté, veuillez remplire les champs obligatoire (*) et verifier le format des champs</strong>
                                            <ul>
                                              @foreach ($errors->all() as $message)
                                              <li>{{$message}}</li>
                                              @endforeach
                                              </ul>
                                          </div>
                                          @endif
                                        </div>

                                <!-- <span class="section" id="InfoPers"><i id="icon" class="fa fa-plus-square"></i> Informations Personnelles</span> -->
                                <!-- <div id="info_perso" style="display: none;"> -->
                                <details open>
                                    <summary style="cursor:pointer; font-family: 'Helvetica'; 
                                    font-size: 20px; color: #212121 "> Information Personnelles : </summary><br>
                                    
                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Civilite *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12 ">

                                        {!! Form::radio('civilite', 'M', ['required' => 'required']) !!} M. <br/>{!! Form::radio('civilite', 'F',['required' => 'required']) !!} Mme

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Nom *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('nom_employee', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Entrez votre nom']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Prénom *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('prenom_employee', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'Entrez votre prénom']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Adresse E-mail *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('email_employee', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required', 'placeholder' => 'ex:example@example.com']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname','N° C.I.N *', ['class'=> 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('cin', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Entrez votre N° C.I.N'] ) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Nationalité ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::select('natio',[

                                          'Choisir la nationalité' => ' Choisir la nationalité',

                                          'Marocain' => 'Marocain',

                                          'Français' => 'Français',

                                          ] ,null,['class' => 'form-control']) !!}

                                    </div>

                                </div>


                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Téléphone mobile *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::tel('telephone_mobile', null, ['class' => 'form-control col-md-7 col-xs-12','required' => 'required', 'placeholder' => 'Téléphone mobile']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Date de naissance ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::date('date_de_naissance', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Date de naissance']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Lieu de naissance  ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('lieu_de_naissance', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Lieu de Naissance']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Ville de residance ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('ville', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'ville de residance']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Statut marital ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::select('statut_marital',$statuts, null, ['class' => 'form-control','placeholder' => 'Choisir Statut']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname','Nombre d\'enfant', ['class'=> 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('nbr_enfants', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Entrez nombre d\'enfant'] ) !!}

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

                            <span class="section">Les informations d'affectation</span>  

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Structure :', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">


                                    {!! Form::select('structure',$structures ,null,['class' => 'form-control','id'=>'structure' ]) !!}

                                </div>

                            </div>
                        
                        <div class="item form-group">

                                {!! Form::label('inputname', 'Services :', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::select('service',['Choisissez un service' => 'Choisissez un service'] ,null,['class' => 'form-control','id'=>'services']) !!}

                                </div>

                            </div>

                            <div class="item form-group">

                                {!! Form::label('inputname', 'Fonctions :', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::select('fonction',['Choisissez une fonction' => 'Choisissez une fonction'] ,null,['class' => 'form-control','id'=>'fonctions']) !!}

                                </div>

                            </div>
<!-- 
                                     <span class="section" id="ContaPers"><i id="icon1" class="fa fa-plus-square"></i> Contacts :</span>

                            <div id="cont_perso" style="display: none;"> 
                                <details>
                                    <summary style="cursor:pointer; font-family: 'Helvetica'; 
                                    font-size: 20px; color: #212121"> Contacts : </summary><br>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Adresse ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('adresse', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Adresse']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Pays de Résidence ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('pays_resid', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Pays de residence']) !!}

                                    </div>

                                </div>

                                <div class="item form-group">

                                    {!! Form::label('inputname', 'Ville Actuelle ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        {!! Form::text('ville', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Ville Actuelle']) !!}

                                    </div>

                                </div>
                            </details>
                            <br>

                                 <span class="section" id="ScolPers"><i id="icon" class="fa fa-plus-square"></i> Parcours Scolaires :</span>

                            <div id="scol_perso" style="display: none;"> 
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
                                            {!! Form::date('date_obtenation', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Date d\'obtention']) !!}
                                            
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
                                            {!! Form::select('diplome',$diplomes, null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Diplôme','id'  =>  'diplomes']) !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::label('inputname', 'Etablissement ') !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::text('etablissement_dip', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Etablissement']) !!}
                                            
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
                                            {!! Form::text('specialite', null, ['class' => 'form-control col-md-7 col-xs-12','placeholder' => 'Spécialité']) !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::label('inputname', 'Ville ') !!}
                                            
                                        </div>
                                        <div class="col-sm-3">
                                            {!! Form::text('ville', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Ville']) !!}
                                            
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
                                            {!! Form::text('entreprise_exp',null,['class' => 'form-control','placeholder' => 'Veuillez saisir nom de l\'entreprise']) !!}
                                            
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

                            </details> -->

                            <br>
                                <span class="section"></span>

                                <div class="form-group">

                                    <div class="col-md-6 col-md-offset-3">

                                        {!! Form::reset("Annuler", ['class' => 'btn btn-warning']) !!}

                                        {!! Form::submit("Ajouter", ['class' => 'btn btn-success']) !!}

                                    </div>

                                </div>

                                {!! Form::close() !!}

                            </div>

                        </div>

                    </div>



                </div>

            </div>

        </div>

        </script>

    @endsection

