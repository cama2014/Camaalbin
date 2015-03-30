$(document).ready(function() {


    var gender = $('#gender').val();
    var plagg = $('#plagg').val();
    var marke = $('#marke').val();
    var page = $('#page').val();

    var pris = $('#pris').val();
    var namn = $('#namn').val();

    $('#h3_kon').append(gender);
    $('#h3_plagg').append(plagg);

    


    $.getJSON("Filtrering.php",
            {gender: gender, plagg: plagg, marke: marke, pris: pris, page: page},
    function(data) {

    
        $.each(data, function(index, value) {
            if (index < 20) {
                $('#allaprodukter').append('<div class="col-lg-3 col-md-3 col-sm-3 fyrabox"><a href="produktsida2.php?namn=' + value.namn + '&plagg='+value.plagg+'&pris=' + value.pris + '&bild='+value.bild+'"><div class="beskrivnig"><img src="' + value.bild + '" width="350" height="450" class="img-responsive" alt="Responsive image"><h3>' + value.märke + '</h3><h3>' + value.namn + '</h3><span class="price">' + value.pris + ' SEK</span></div></a></div>');
            }

        });

    });

    var pris2 = $('#pris').val();
    $('#h5_pris').append(pris2 + " SEK");

    var namn2 = $('#namn').val();
    $('#h3_namn').append(namn2);
    
    var bild2 = $('#bild').val();
    console.log(bild2);
    $('#produktsida2bild').append('<img id="produktsida2bild "src="'+bild2+'" width="560" height="700" class="img-responsive" alt="Responsive image">');
    
    
    if(plagg =="JEANS" || plagg=="chinos" || plagg=="mössa" || plagg=="keps"){
        $('#guide_img').append('<img src="img/Jeans_guide.png" class="img-responsive" alt="Responsive image">')
    }else{
        $('#guide_img').append('<img src="img/Tshirt_guide.png" class="img-responsive" alt="Responsive image">')
    }

});


