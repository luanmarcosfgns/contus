$('#tipo').click(function () {

   if($('#tipo').val()=='E' || $('#tipo').val()=='S'){
          
     $('.periodo').attr('style','display:none;');
     $('#periodo-id').attr('value','');
   }else{
       $('.periodo').attr('style','display:block;');
     $('#periodo-id').attr('value','');
   }
   
   
});

