//Heure script


function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
  }
  function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
  }
  
//selectionner tout          

function checkAll(){

var coche = document.getElementById('selectionner');

 var check = document.getElementsByName('id_pros[]');

        if( coche.checked == true)

        {

            for( var i = 0 ; i < check.length ; i++)

            {

                check[i].checked = true;
      
            }

        }

        else

        {

            for( var i = 0 ; i < check.length ; i++)

            {

                check[i].checked = false;

            }
        }

    }



//montre :)

function startTime() {

  var today = new Date();

  var h = today.getHours();

  var m = today.getMinutes();

  var s = today.getSeconds();

  m = checkTime(m);

  s = checkTime(s);

  document.getElementById('txt').innerHTML =

  h + ":" + m + ":" + s;

  var t = setTimeout(startTime, 500);

}

function checkTime(i) {

  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10

  return i;

}



$(document).ready(function() {

  console.log("hi");

// Setup - add a text input to each footer cell



    // Setup - add a text input to each footer cell

    $('#example tfoot th').each( function () {

        var title = $(this).text();

        $(this).html( '<input type="text" class="form-control" style="width:100px;" placeholder="'+title+'" />' );

    } );



    // DataTable

    var table = $('#example').DataTable();



    // Apply the search

    table.columns().every( function () {

        var that = this;

        $( 'input', this.footer() ).on( 'keyup change', function () {

            if ( that.search() !== this.value ) {

                that

                    .search( this.value )

                    .draw();

            }

        } );

    } );



/*
//affichage animé section info prospect "bac"

    $("input[name='etat_bac']:radio").on('change', function() {

      if($(this).val() === 'avec_bac') {

        $("#post-bac-diplomes").fadeIn();

      } else {

        $("#post-bac-diplomes").fadeOut();

      }

    });

    //affichage animé section info certificat 

    $("input[name='etat_certificat']:radio").on('change', function() {

      if($(this).val() === 'avec_certificat') {

        $("#certificat-pro").fadeIn();

      } else {

        $("#certificat-pro").fadeOut();

      }

    });

    //affichage animé section info experience 

    $("input[name='etat_experience']:radio").on('change', function() {

      if($(this).val() === 'avec_experience') {

        $("#experience-pro").fadeIn();

      } else {

        $("#experience-pro").fadeOut();

      }

    });


} );


    // info pers candidat
    $("#InfoPers").on('click',function(){

      if($('#info_perso').is(':visible')){

        $('#info_perso').fadeOut();
        $('#icon').removeClass('fa-plus-square').addClass('fa-minus-square');


      }else{

        $('#info_perso').fadeIn();
        $('#icon').removeClass('fa-minus-square').addClass('fa-plus-square');
      }


    });

    // contact candidat
    $("#ContaPers").on('click',function(){

      if($('#cont_perso').is(':visible')){

        $('#cont_perso').fadeOut();
        $('#icon').removeClass('fa-plus-square').addClass('fa-minus-square');


      }else{

        $('#cont_perso').fadeIn();
        $('#icon').removeClass('fa-minus-square').addClass('fa-plus-square');
      }


    });

    // parcours scolaire candidat
    $("#ScolPers").on('click',function(){

      if($('#scol_perso').is(':visible')){
        
        $('#scol_perso').fadeOut();
        $('#icon').removeClass('fa-plus-square').addClass('fa-minus-square');


      }else{

        $('#scol_perso').fadeIn();
        $('#icon').removeClass('fa-minus-square').addClass('fa-plus-square');
      }


    });

    // parcours professionnel candidat
    $("#ProPers").on('click',function(){

      if($('#pro_perso').is(':visible')){
        
        $('#pro_perso').fadeOut();
        $('#icon').removeClass('fa-plus-square').addClass('fa-minus-square');


      }else{

        $('#pro_perso').fadeIn();
        $('#icon').removeClass('fa-minus-square').addClass('fa-plus-square');
      }


    });

    // certificat candidat
    $("#CertPers").on('click',function(){

      if($('#cert_perso').is(':visible')){
        
        $('#cert_perso').fadeOut();
        $('#icon').removeClass('fa-plus-square').addClass('fa-minus-square');


      }else{

        $('#cert_perso').fadeIn();
        $('#icon').removeClass('fa-minus-square').addClass('fa-plus-square');
      }


    });*/


if ($('#projet').length>0){

    $('#projet').on('change',function(e){

      console.log(e);
      var proj_id = e.target.value;

      $.get('/ajax-subproj?proj_id=' + proj_id, function(data){
        $('#collaborateur').empty();
        $('#collaborateur').append('<option selected="true" disabled="disabled">Choisissez un collaborateur</option>');


        $.each(data, function(index, collaborateur){
          $('#collaborateur').append('<option required="required" value="'+collaborateur.id_collaborateur+'">'+collaborateur.nom_colla+' '+collaborateur.prenom_colla+'</option>');

        });
      });
    });
  };

    







  if ($('#collaborateur').length>0){

    $('#collaborateur').on('change',function(e){

      console.log(e);
      var id_collaborateur = e.target.value;

      $.get('/ajax-date?id_collaborateur=' + id_collaborateur, function(data){
        $('#dd').empty();
        $('#df').empty();

        $.each(data, function(index, collaborateur){
          $('#dd').append('<label for="datedeb" class="control-label">Date debut :</label><input required="required" id="datedeb" class="form-control" name="date_fin_crm" type="date" value="'+collaborateur.date_deb_proj_pros+'" />');
          $('#df').append('<label for="datefin" class="control-label">Date fin :</label><input required="required" id="datefin" class="form-control" name="date_deb_crm" type="date" value="'+collaborateur.date_fin_proj_pros+'" />');

        });
      });
    });
  };


      $('#add').on('click', function(event ){
        event.preventDefault();
        $('.parcours').append("<a href=''>Hello</a>");

      });


  $('#myModal').on('shown.bs.modal', function (e) {

  //console.log(e);

  commencer();

})

  $('#myModal').on('hidden.bs.modal', function (e) {

  //console.log(e);

  arreter();

  reinitialiser();

})

  $('.modalbox').each(function(){

    $(this).click(function(){

      var id_prospect = $(this).data('id');

      var crm = $(this).data('crm');

      $('#myModal').modal('show')

      $.get('/ajax-prospect/' + id_prospect+'/'+crm, function(data){

        $('#modal_content').html(data);


              //  $('#formation').empty();

                //$('#formation').append('<option selected="true" disabled="disabled">Choisissez une formation</option>');


                //$.each(data, function(index, prospect){

                //$('#formation').append('<option required="required" value="'+formation.id_formation+'">'+formation.libelle_formation+'</option>');

              //});

      });

    })

  });



//Fullscreen script 

 function fullScreen() {
        if ((document.fullScreenElement && document.fullScreenElement !== null) ||    
       (!document.mozFullScreen && !document.webkitIsFullScreen)) {
        if (document.documentElement.requestFullScreen) {  
          document.documentElement.requestFullScreen();  
        } else if (document.documentElement.mozRequestFullScreen) {  
          document.documentElement.mozRequestFullScreen();  
        } else if (document.documentElement.webkitRequestFullScreen) {  
          document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
        }  
      } else {  
        if (document.cancelFullScreen) {  
          document.cancelFullScreen();  
        } else if (document.mozCancelFullScreen) {  
          document.mozCancelFullScreen();  
        } else if (document.webkitCancelFullScreen) {  
          document.webkitCancelFullScreen();  
        }  
      }  
    }

    //Recuperer les donnees du site web a l'aide du cURL 
    var index = 0;

    console.log(z.length);

			function sendAjax(){
						if(index < z.length){
							$.ajax({
                url : '/insertion-data-site',
                data : z[index],
								type : "POST"
							}).done(function(response){
								if(response == 1){
									index++;
									sendAjax(index);
								}								
							});
						}
					}
		sendAjax();