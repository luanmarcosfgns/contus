
   function setlink(value) {
    

		$('.input-search').attr('class','input-search no-visible');
	
		
 

	 Snarl.addNotification({
        title: 'Carregando',
        timeout: 1000
    });
   
	if(!$(value).is('.load-request')){
	    /// não executa o <a href>
	    $.ajax({
		url: $(value).attr('data-href'),
		type: 'GET',
		contentType: 'html',
		
		success: function(data) {
		    
		    $('.container').attr('class','container no-visible');
		
		    $('.container').empty().html(data.replaceAll('href=','onclick="setlink(this)" href="#" data-href='));
		        $('.container').attr('class','container visible');
		    
		  
		   
		   
		  
		   
		}
	    });
	    
       }else{
	   
	  location.href=$(value).attr('data-href');
       }
	
 


} 