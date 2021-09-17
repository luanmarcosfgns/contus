$('document').on('load',function () {
   
var link = location.href;
var alink =link.split('/');
$('#periodo-id').val(alink[6]);
 
alert('teste');
});


$(window).on("load",function(){
    $(".loader-wrapper").fadeOut("slow");
});


$(window).one("load",function(){
    $('a').each(function () {
	if($(this).attr('href')!=='#'){
	$(this).attr('data-href',$(this).attr('href'));
	$(this).attr('href','#');
	$(this).attr('onclick','setlink(this)');
    }
    });
    
   
});