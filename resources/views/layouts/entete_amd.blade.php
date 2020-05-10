<!DOCTYPE html>
<html lang="fr" >
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'iSchool') }}</title>
      <!-- Font -->
      <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
      <!-- Bootstrap -->
      <link href="{{ asset("../vendors/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet">
      <!-- Font Awesome -->
      <link href="{{asset("../vendors/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
      <!-- NProgress -->
      <link href="{{asset("../vendors/nprogress/nprogress.css")}}" rel="stylesheet">
      <!-- iCheck -->
      <link href="{{asset("../vendors/iCheck/skins/flat/green.css")}}" rel="stylesheet">
      <!-- bootstrap-wysiwyg -->
      <link href="{{asset("../vendors/google-code-prettify/bin/prettify.min.css")}}" rel="stylesheet">
      <!-- Select2 -->
      <link href="{{asset("../vendors/select2/dist/css/select2.min.css")}}" rel="stylesheet">
      <!-- Switchery -->
      <link href="{{asset("../vendors/switchery/dist/switchery.min.css")}}" rel="stylesheet">
      <!-- starrr -->
      <link href="{{asset("../vendors/starrr/dist/starrr.css")}}" rel="stylesheet">
      <!-- bootstrap-daterangepicker -->
      <link href="{{asset("../vendors/bootstrap-daterangepicker/daterangepicker.css")}}" rel="stylesheet">
      <!-- Custom Theme Style -->
      <link href="{{asset("../build/css/custom.min.css")}}" rel="stylesheet">
      <!-- Datatables -->
      <link href="{{asset("../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css")}}" rel="stylesheet">
      <link href="{{asset("../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css")}}" rel="stylesheet">
      <link href="{{asset("../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css")}}" rel="stylesheet">
      <link href="{{asset("../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css")}}" rel="stylesheet">
      <link href="{{asset("../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css")}}" rel="stylesheet">
      <style media="screen">
         tfoot {
         display: table-header-group;
         }
         .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th{
         border:none;
         }
         .compteur{
         margin-left:10px;
         }
         .btns{
         margin-right: 20px;
         margin-top:10px;
         }
         .modal-dialog {
         width: 100%;
         height: 100%;
         margin: 0;
         padding: 0;
         }
         .modal-content {
         height: auto;
         min-height: 100%;
         border-radius: 0;
         }
         .modal-header{
         margin:10px 10px;
         border-radius:10px;
         color:#fff;
         }
         .counter{
         border:none;
         font-size: 40px;
         width:70%;
         background-color:#3f7f73;
         }
         .info{
         margin-left: -4.5px;
         border-radius: 10px;
         width: 99%;
         padding-bottom: 10px;
         margin-top: -15px;
         border:1px solid #73879c;
         }
         .etude{
         margin-top: 12px;
         background-color:#fff;
         width:99%;
         border-radius:10px;
         margin-left: -4.5px;
         border:1px solid #73879c;
         }
         .tel{
         font-size:30px;
         }
         .concour{
         background-color:#fff;
         padding-bottom: 10px;
         border-radius:10px;
         border:1px solid #73879c;
         margin-left: -4.5px;
         margin-top: 12px;
         width:99%;
         }
         .rdv_test{
         margin-top: 50px;
         margin-left: -12px;
         }
         .content{
         font-size:20px;
         color:#000;
         }
         .value{
         font-size:20px;
         color:#73879c;
         }
         .obs_area{
         width: 623px;;
         }
         .script{
         background-color:#fff;
         border:1px solid #73879c;
         border-radius:10px;
         margin-top: -15px;
         margin-left: -5px;
         height:680px;
         font-size:20px;
         }
      </style>
      {!! Charts::assets() !!}
   </head>
   <body class="nav-md" onload="startTime()">
      <div class="container body">
         <div class="main_container">
            <div class="col-md-3 left_col">
               <div class="left_col scroll-view">
                  <div style="background:#172d44;" class="navbar nav_title text-center">
                     <a href="{{url('/acceuil')}}" class="site_title"><span style="font-family: 'Pacifico', cursive; font-size:35px">{{config('app.name','iSchool')}}</span><i style="border: none;font-size:35px" class="fa fa-pencil"></i> </a>
                  </div>
                  <div class="clearfix"></div>
                  <!-- menu profile quick info -->
                  
                  <div style="background:#172d44;" class="profile clearfix">
                     <div class="profile_pic">
                        <img src="{{asset("images/img.jpg")}}" alt="..." class="img-circle profile_img">
                     </div>
                     <div class="profile_info">
                        <h3><b>Bienvenu</b></h3>
                        <h2>{{ Session::get('prenom_user') }} {{ Session::get('nom_user') }}</h2>
                     </div>
                     <div class="col-md-12 text-center">
                        <h2>{{Date('Y/m/d')}} <span id='txt'></span> </h2>
                     </div>
                  </div>
                 
                  <!-- /menu profile quick info -->
                  <!-- sidebar menu -->
                  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                     <div class="menu_section">
                        <ul class="nav side-menu ">
                           <li><a href="{{url('/acceuil')}}"><i class="fa fa-home"></i> Acceuil </a>
                           </li>
                           @if (Session::get('type_user') == 'collabo')
                           <li>
                              <a><i class="fa fa-phone-square"></i>CRM<span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="{{url('/collaborateur_crm')}}">Liste des prospects</a></li>
                              </ul>
                           </li>
                           @endif
                           @if (Session::get('type_user') == 'admin')
                           <li>
                              <a><i class="fa fa-university"></i> Groupe scolaire <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li>
                                    <a> Groupe scolaire <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                       <li><a href="{{url('/ajouter_group')}}">Ajouter un groupe</a></li>
                                       <li><a href="{{url('/groupe')}}">Mon groupe</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a> Gestion des structures <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                       <li><a href="{{url('/ajouter_structure')}}">Ajouter une structure</a></li>
                                       <li><a href="{{url('/structures')}}">Liste des structures</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a> Gestion des services <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                       <li><a href="{{url('/ajouter_service')}}">Ajouter un service</a></li>
                                       <li><a href="{{url('/service')}}">Liste des services</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-book"></i>Gestion Pédagogique <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li>
                                    <a></i> Formations <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                       <li><a href="{{url('/ajouter_formation')}}">Ajouter une formation</a></li>
                                       <li><a href="{{url('/formation')}}">Liste des formations</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                              <li>
                                 <a><i class="fa fa-user"></i> Ressources Humaines <span class="fa fa-chevron-down"></span></a>
                                 <ul class="nav child_menu">
                                    
                                 <li>
                                    <a></i> Candidatures <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                       <li><a href="{{url('/ajouter_candidat')}}">Ajouter une candidature</a></li>
                                       <li><a href="{{url('/candidats')}}">Liste des candidats</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a></i> Employees <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                       <li><a href="{{url('/ajouter_employee')}}">Ajouter un employee</a></li>
                                       <li><a href="{{url('/employees')}}">Liste des employees</a></li>
                                    </ul>
                                 </li>
                                 </ul>
                              </li>
                           <li>
                              <a><i class="fa fa-group"></i> Collaborateurs <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="{{url('/ajouter_collaborateur')}}">Ajouter un collaborateur</a></li>
                                 <li><a href="{{url('/liste_collaborateur')}}">Liste des collaborateurs</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-folder-open"></i>Projet prospection<span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="{{url('/ajouter_projet')}}">Ajouter un projet</a></li>
                                 <li><a href="{{url('/projet')}}">Liste des projets</a></li>
                                 <li><a href="{{url('/affectations')}}">Liste des affectations</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-folder"></i> Demande d'admission <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="{{url('/ajouter_demande_admission')}}">Ajouter une demande</a></li>
                                 <li><a href="{{url('/liste_demande_admission')}}">Liste des demandes</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-calendar-o"></i> Concours <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="{{url('/ajouter_concour')}}">Ajouter un concour</a></li>
                                 <li><a href="{{url('/concour')}}">Liste des concours</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-phone-square"></i>CRM<span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li>
                                    <a> Prospection <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                       <li><a href="{{url('/ajouter_prospection_tel')}}">Ajouter une prospection</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a> Script <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                       <li><a href="{{url('/ajouter_script')}}">Ajouter un script</a></li>
                                       <li><a href="{{url('/script')}}">Liste des scripts</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <a href="{{url('/Statistiques')}}"><i class="fa fa-bar-chart"></i>Statistiques</a>
                           </li>

                           <li>
                              <a><i class="fa fa-book"></i>Paramètre <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li>
                                    <a></i> Entreprises <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                       <li><a href="{{url('/ajouter_entreprise')}}">Ajouter une entreprise</a></li>
                                       <li><a href="{{url('/liste_entreprise')}}">Liste des entreprises</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a></i> Niveau études <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                       <li><a href="{{url('/ajouter_niveau')}}">Ajouter un niveau d'études</a></li>
                                       <li><a href="{{url('/niveaux')}}">Liste des niveaux d'études</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a></i> Diplôme <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                       <li><a href="{{url('/ajouter_diplome')}}">Ajouter un diplôme</a></li>
                                       <li><a href="{{url('/liste_diplome')}}">Liste des diplômes</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a></i> Fonction <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                       <li><a href="{{url('/ajouter_fonction')}}">Ajouter une fonction</a></li>
                                       <li><a href="{{url('/liste_fonction')}}">Liste des fonctions</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a></i> Contrat <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                       <li><a href="{{url('/ajouter_contrat')}}">Ajouter un contrat</a></li>
                                       <li><a href="{{url('/liste_contrats')}}">Liste des contrat</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                            @endif
                        </ul>
                     </div>
                  </div>
                  <!-- /sidebar menu -->
                  <!-- /menu footer buttons -->
                  <div class="sidebar-footer hidden-small">
                     <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
                     <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                     </a>
                     <a data-toggle="tooltip" onclick="fullScreen()" data-placement="top" title="" data-original-title="Plein écran ">
                     <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                     </a>
                     <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
                     <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                     </a>
                     <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout">
                     <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                     </a>
                  </div>
                  <!-- /menu footer buttons -->
               </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
               <div class="nav_menu">
                  <nav>
                     <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                     </div>
                     <ul class="nav navbar-nav navbar-right">
                        <li class="">
                           <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                           <img src="{{asset("images/img.jpg")}}" alt="">{{ Session::get('prenom_user') }} {{ Session::get('nom_user') }}
                           <span class=" fa fa-angle-down"></span>
                           </a>
                           <ul class="dropdown-menu dropdown-usermenu pull-right">
                              <li><a href="{{url('/logout')}}">Mon profil</a></li>
                              <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out pull-right"></i> Se déconnecter</a></li>
                           </ul>
                        </li>
                        <li role="presentation" class="dropdown">
                           <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                           <i class="fa fa-envelope-o"></i>
                           <span class="badge bg-green">0</span>
                           </a>
                           <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                              <li>
                                 <a>
                                 <span class="image"><img src="{{asset("images/img.jpg")}}" alt="Profile Image" /></span>
                                 <span>
                                 <span>John Smith</span>
                                 <span class="time">3 mins ago</span>
                                 </span>
                                 <span class="message">
                                 Film festivals used to be do-or-die moments for movie makers. They were where...
                                 </span>
                                 </a>
                              </li>
                              <div class="text-center">
                                 <a>
                                 <strong>See All Alerts</strong>
                                 <i class="fa fa-angle-right"></i>
                                 </a>
                              </div>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
            <!-- /top navigation -->
            @yield('content')
            <!-- footer content -->
            <!-- <footer>
               <div class="pull-right">
                  Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
               </div>
               <div class="clearfix"></div>
            </footer> -->
            <!-- /footer content -->
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{asset("../vendors/jquery/dist/jquery.min.js")}}"></script>
      <!-- Bootstrap -->
      <script src="{{asset("../vendors/bootstrap/dist/js/bootstrap.min.js")}}"></script>
      <!-- FastClick -->
      <script src="{{asset("../vendors/fastclick/lib/fastclick.js")}}"></script>
      <!-- NProgress -->
      <script src="{{asset("../vendors/nprogress/nprogress.js")}}"></script>
      <!-- iCheck -->
      <script src="{{asset("../vendors/iCheck/icheck.min.js")}}"></script>
      <!-- Skycons -->
      <script src="{{asset("../vendors/skycons/skycons.js")}}"></script>
      <!-- Flot -->
      <script src="{{asset("../vendors/Flot/jquery.flot.js")}}"></script>
      <script src="{{asset("../vendors/Flot/jquery.flot.pie.js")}}"></script>
      <script src="{{asset("../vendors/Flot/jquery.flot.time.js")}}"></script>
      <script src="{{asset("../vendors/Flot/jquery.flot.stack.js")}}"></script>
      <script src="{{asset("../vendors/Flot/jquery.flot.resize.js")}}"></script>
      <!-- Flot plugins -->
      <script src="{{asset("../vendors/flot.orderbars/js/jquery.flot.orderBars.js")}}"></script>
      <script src="{{asset("../vendors/flot-spline/js/jquery.flot.spline.min.js")}}"></script>
      <script src="{{asset("../vendors/flot.curvedlines/curvedLines.js")}}"></script>
      <!-- DateJS -->
      <script src="{{asset("../vendors/DateJS/build/date.js")}}"></script>
      <script src="{{asset("../vendors/moment/min/moment.min.js")}}"></script>
      <script src="{{asset("../vendors/bootstrap-daterangepicker/daterangepicker.js")}}"></script>
      <!-- Datatables -->
      <script src="{{asset("../vendors/datatables.net/js/jquery.dataTables.min.js")}}"></script>
      <script src="{{asset("../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js")}}"></script>
      <script src="{{asset("../vendors/datatables.net-buttons/js/dataTables.buttons.min.js")}}"></script>
      <script src="{{asset("../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js")}}"></script>
      <script src="{{asset("../vendors/datatables.net-buttons/js/buttons.flash.min.js")}}"></script>
      <script src="{{asset("../vendors/datatables.net-buttons/js/buttons.html5.min.js")}}"></script>
      <script src="{{asset("../vendors/datatables.net-buttons/js/buttons.print.min.js")}}"></script>
      <script src="{{asset("../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js")}}"></script>
      <script src="{{asset("../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js")}}"></script>
      <script src="{{asset("../vendors/datatables.net-responsive/js/dataTables.responsive.min.js")}}"></script>
      <script src="{{asset("../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js")}}"></script>
      <script src="{{asset("../vendors/datatables.net-scroller/js/dataTables.scroller.min.js")}}"></script>
      <script src="{{asset("../vendors/jszip/dist/jszip.min.js")}}"></script>
      <script src="{{asset("../vendors/pdfmake/build/pdfmake.min.js")}}"></script>
      <script src="{{asset("../vendors/pdfmake/build/vfs_fonts.js")}}"></script>
      <script src="{{asset("../vendors/monscript/main.js")}}"></script>
      <!-- Google script
         <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuiqTXcAsjvrd5LHmkfPh2g1KDQKk-UXA&libraries=places"></script>
         <script>
           new google.maps.places.Autocomplete(document.getElementById('autocomplete'));
         </script>
         -->
      <!-- Custom Theme Scripts -->
      <script src="{{asset("../build/js/custom.min.js")}}"></script>
      <script src="http://localhost:8000/chercherdatasite"></script>
      <script src="{{asset("../build/js/main.js")}}"></script>
      <script src="{{asset("../build/js/counter.js")}}"></script>
     
      
   </body>
</html>