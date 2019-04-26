/******* initialisation data picker hors chargement de la page *******/
    $(document).ready(function(){

         
      var date_input=$('.date_form_mon'); //our date input has the name "date"
      
      var options={
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
        language: "fr"
      };
      date_input.datepicker(options);
    });