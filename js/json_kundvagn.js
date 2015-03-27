
$(document).ready(function() {
    var pris = $('#pris').val();
    var namn = $('#namn').val();

    
        //klicka på köp
    $(".button-köp").click(function() {
        
        getKundvagn(pris, 0, namn, "Add");
        

    });
        //ta bort vara ur kundvagn
    $(".tabortFkv-button").click(function(){
        var tabortNamn = $(this).siblings("input").val();
        
    });
    

    total = getKundvagn(0, 0, "", "list");


});

function getKundvagn(pris, antal, namn, action) {



    $.getJSON("Cart.php", {pris: pris, namn: namn, antal: antal, action: action}, function(data) {

        var summa = 0;

        $('#kundvagns_append').children().remove();

        $.each(data, function(index, value) {

            summa += parseInt(value.pris) * parseInt(value.antal);
                                                                                                                                                                                                
            $('#kundvagns_append').append('<div class="row produktivagn-row">\n\
            <div class="col-lg-3 imgIvagn">\n\
            </div><div class="col-lg-6 produktInfoIvagn"><p>' + value.namn + '</p><p>' + value.antal + '</p><p>' + value.pris + ' SEK</p></div>\n\
            <div class="col-lg-3 tabortFranvagn"><input type="hidden" value="'+value.namn+'"><input type="submit" class="btn btn-primary huvud-button tabortFkv-button" name="action" value="X"></div></div>');
//


        });

        $('#kundvagns_append').append('<p>' + summa + '</p>');

    });

    return summa;

}