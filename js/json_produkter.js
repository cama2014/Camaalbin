$(document).ready(function() {
    
   $.getJSON("getprodukter.php",
              function(data){
                  
                 $.each(data, function(index,value){
                        
                        $('#allaprodukter').append();
                        
                        $('#marke').append(value.märke);
                        console.log(value);
                     
                 }); 
                  
                  
                  
                  
              });
    
    
    
    
    
    
});


