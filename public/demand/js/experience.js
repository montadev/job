
  /****************** duplicate experience *******************************/
  $('.btn-duplicator-ex').click(function(Event){


       Event.preventDefault();
            
  $('.item-form-exp').append('<div class="item-block"><button class="test-center sup">Supprimer</button><div class="item-form "><div class="row"><div class="col-xs-12 col-sm-8"><div class="form-group"><label>Entreprise</label><input type="text" name="entreprise[]" class="form-control"></div><div class="form-group"><label>Position</label><input type="text" name="position[]" class="form-control"></div><div class="form-group"><div class="input-group"><span class="input-group-addon">De</span><input type="text" name="from_post[]" class="form-control date_form_mon" placeholder="AAAA-mm-jj"><span class="input-group-addon">A</span><input type="text" name="to_post[]" class="form-control date_form_mon" placeholder="AAAA-mm-jj"></div></div></div><div class="col-xs-12"><div class="form-group"><div class="form-group"><textarea class="form-control" name="desc_post[]" rows="3" placeholder="Short description"></textarea></div></div> </div></div></div></div>');

    var date_input=$('.date_form_mon'); //our date input has the name "date"
       
      var options={
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
        language: "fr"
      };
      date_input.datepicker(options);
  });

/****** add event listner pour supprimer un experience ********/
    $(document).on('click', '.sup',function(event){

       
        event.preventDefault();


       $(this).parent().remove();

    });