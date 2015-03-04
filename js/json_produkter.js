$(document).ready(function() {
    
   $.getJSON("Filtrering.php",
              function(data){
                  
                 $.each(data, function(index,value){
                        
                        $('#allaprodukter').append('<div class="col-lg-3 col-md-3 col-sm-3 fyrabox"><a href="produktsida2.php"><div class="beskrivnig"><img src="'+value.bild+'" width="350" height="450" class="img-responsive" alt="Responsive image"><h3>' +value.märke+ '</h3><h3>'+value.namn+'</h3><span class="price">'+value.pris+' SEK</span></div></a></div>');
                        
                        
                        
                 }); 
                  
                  
                  
                  
              });
    
    
    
    
    
    
});


