function setrequest () {

var vl =$('#periodo-id').val()

    if(vl!=='empty'){
	
	var link = location.href;
var alink =link.split('/');


	  $.ajax({
		url:  '/contus/contas/index/'+vl,
		type: 'GET',
		contentType: 'html',
		
		success: function(data) {
		    
		    $('.container').attr('class','container no-visible');
		
		    $('.container').empty().html(data.replaceAll('href=','onclick="setlink(this)" href="#" data-href=').replaceAll('value="'+vl+'"','value="'+vl+'" selected'));
		        $('.container').attr('class','container visible');
		    

		   
		   

		  
		   
		}
	    });
	    
   
   
    

}

}