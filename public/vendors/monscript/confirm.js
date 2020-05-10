
  $('form').on('submit',function(event){
    
            var r = confirm("êtes-vous sûre de vouloir confirmer cet action?");
            if (!r) event.preventDefault();

            //confirm("êtes-vous sûre de vouloir confirmer cette action?.") ? : event.preventDefault() ;

  });


$('#delete').on('click', function(e){
            var r = confirm("êtes-vous sûre de vouloir confirmer la suppression ?");
            if (!r) e.preventDefault();
});
  
