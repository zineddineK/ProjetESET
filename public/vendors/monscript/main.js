function checkAll(){

var coche = document.getElementById('selectionner');

    var check = document.getElementsByName('prospect[]');

    if(check != null)

    {

        if( coche.checked == true)

        {

            for( var i = 0 ; i < check.length ; i++)

            {

                check[i].checked = true;

                var tmp = 1;

            }

        }

        else

        {

            for( var i = 0 ; i < check.length ; i++)

            {

                check[i].checked = false;

                var tmp = 1;

            }

     

        }

    }

    else

    {

        return false;

    }

}



    
if ($('#structure').length>0){

    $('#structure').on('change',function(e){

      var stru_id = e.target.value;

      $.get('/services/' + stru_id, function(data){

          console.log(data);

        $('#services').empty();
        $('#services').append('<option selected="true" disabled="disabled">Choisissez un service</option>');


        $.each(data, function(index, service){
          $('#services').append('<option required="required" value="'+service.id_service+'">'+service.libelle_service+'</option>');

        });


      });
    });
  };


if ($('#services').length>0){

    $('#services').on('change',function(e){

      var service_id = e.target.value;

  console.log(service_id);      

      $.get('/fonctions/' + service_id, function(data){

          console.log(data);

        $('#fonctions').empty();
        $('#fonctions').append('<option selected="true" disabled="disabled">Choisissez une function</option>');


        $.each(data, function(index, fonction){
          $('#fonctions').append('<option required="required" value="'+fonction.id+'">'+fonction.libelle_fonction+'</option>');

        });


      });
    });
  };


  $('form').on('submit',function(event){
    
            var r = confirm("êtes-vous sûre de vouloir confirmer cet action?");
            if (!r) event.preventDefault();

            //confirm("êtes-vous sûre de vouloir confirmer cette action?.") ? : event.preventDefault() ;

  });


$('#delete').on('click', function(e){
            var r = confirm("êtes-vous sûre de vouloir confirmer la suppression ?");
            if (!r) e.preventDefault();
});
  
