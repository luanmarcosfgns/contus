

function mudalabel(location){
   var valor=$(location).val();
   
   if(valor=='P'){
       console.log('teste');
    $('.data-vencimento').html('Vencimento');
    $('.data-pagarei').html('Pagarei');
   }else if(valor=='R'){
    $('.data-vencimento').html('Previsão de Recebimento');
    $('.data-pagarei').html('Recebimento');
   }
}