    $('.btn-duplicator-formation').click(function(Event){


       Event.preventDefault();
            
  $('.item-form-formation').append('<div class="item-block"><button class="test-center sup_formation">Supprimer</button><div class="item-form"><div class="row"><div class="col-xs-12 col-sm-8"><div class="form-group"><label for="formation">Diplôme ou spécialité</label><input type="text" name="diplome[]" class="form-control"></div><div class="form-group"><label for="formation">Université ou établissement</label><input type="text" name="universite[]" class="form-control"></div><div class="form-group"><div class="input-group"><span class="input-group-addon">De</span><input type="text"  name="from[]" class="form-control date_form_mon" placeholder="AAAA-mm-jj"><span class="input-group-addon">A</span><input type="text" name="to[]" class="form-control date_form_mon" placeholder="AAAA-mm-jj"></div></div><div class="form-group"><textarea class="form-control" name="desc_form[]" rows="3" placeholder="Short description"></textarea></div></div></div></div></div>');

    var date_input=$('.date_form_mon'); //our date input has the name "date"
       
      var options={
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
        language: "fr"
      };
      date_input.datepicker(options);
  });

    /****** add event listner pour supprimer une formation ********/
    $(document).on('click', '.sup_formation',function(event){

       
        event.preventDefault();


       $(this).parent().remove();

    });