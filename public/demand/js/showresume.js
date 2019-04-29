$( document ).ready(function() {


   $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


$('#resume').click(function(event){

         event.preventDefault();

         
            $.ajax({
                                type    :"GET",
                                url     :"resume",
                                dataType:"html",                                 
                                success :function(response){
                                    
                                  $('#switch').html(response);

                                },
                                error :function(response,xhr, status){
                                 
                                    console.log(status);
                                }
                                     
                            
                          });

    });


});