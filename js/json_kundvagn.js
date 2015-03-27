$(document).ready(function() {
    var pris = $('#pris').val();
    var namn = $('#namn').val();

    var total = 0;

    $(".button-köp").click(function() {

        getKundvagn(pris, 0, namn, "Add");
        console.log("button köp funkar");
    });

    getKundvagn(0, 0, "", "list");

});

function getKundvagn(pris, antal, namn, action) {

    $.getJSON("Cart.php", {pris: pris, namn: namn, antal: antal, action: action}, function(data) {

    
    
            
        $.each(data, function(index, value) {
            total += value.pris;
            
                $('#kundvagns_append').append('<div class="row produktivagn-row"><div class="col-lg-3 imgIvagn"><img src="img/tshirtbildtest.jpg" width="350" height="550" class="img-responsive" alt="Responsive image"></div><div class="col-lg-6 produktInfoIvagn"><p>' + value.namn + '</p><p>' + value.pris + '</p><p>' + value.pris + ' SEK</p></div><div class="col-lg-3 tabortFranvagn"><input type="submit" class="btn btn-primary huvud-button tabortFkv-button" name="action" value="X"></div></div>');
            
            

        });

        $('#kundvagns_append').append(total);

    });



}