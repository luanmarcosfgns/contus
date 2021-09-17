function pesquisa() {
	if($('.input-search').is('.no-visible')){
		$('.input-search').attr('class','input-search visible');
	}else{
		$('.input-search').attr('class','input-search no-visible');
	}
	
}