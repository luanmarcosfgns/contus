$('#periodo-id').on('change',function () {



    if($('#periodo-id').val()!='empty'){
	
	var link = location.href;
var alink =link.split('/');
if(alink[6]!=$('#periodo-id').val()){
   
    location.href = '/contus/contas/index/'+$('#periodo-id').val();
    }

}

});