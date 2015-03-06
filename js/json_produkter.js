$(document).ready(function() {


    var gender = $('#gender').val();
    var plagg = $('#plagg').val();
    var marke = $('#marke').val();

    var pris = $('#pris').val();
    var namn = $('#namn').val();

    $('#h3_kon').append(gender);
    $('#h3_plagg').append(plagg);




    $.getJSON("Filtrering.php",
            {gender: gender, plagg: plagg, marke: marke, pris: pris},
    function(data) {


        $.each(data, function(index, value) {
            if (index < 16) {
                $('#allaprodukter').append('<div class="col-lg-3 col-md-3 col-sm-3 fyrabox"><a href="produktsida2.php?namn=' + value.namn + '&pris=' + value.pris + '"><div class="beskrivnig"><img src="' + value.bild + '" width="350" height="450" class="img-responsive" alt="Responsive image"><h3>' + value.märke + '</h3><h3>' + value.namn + '</h3><span class="price">' + value.pris + ' SEK</span></div></a></div>');

            }

        });

    });


    var pris2 = $('#pris').val();
    $('#h5_pris').append(pris2 + " SEK");

    var namn2 = $('#namn').val();
    $('#h3_namn').append(namn2);
    
    

});


