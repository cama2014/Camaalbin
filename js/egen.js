
//filter

$(document).ready(function() {
    $(".well a").click(function() {

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });

    //bytta sida

    //sätt startvärden
    $(".byttasida li:nth-of-type(2)").addClass("ruta2-crossed");
    $(".byttasida li:nth-of-type(2) a").addClass("nummer-crossed");

    //klick för
    $(".nummer").click(function() {
        $(".ruta2").removeClass("ruta2-crossed");
        $(this).parent(".ruta2").toggleClass("ruta2-crossed");
        $(".nummer").removeClass("nummer-crossed");
        $(this).toggleClass("nummer-crossed");
    });

    //pilar

    $(".glyphicon-chevron-right").click(function() {
        console.log($(".ruta2-crossed").index());
        var rutIndex = $(".ruta2-crossed").index();
        console.log("startvärde: " + rutIndex);
        rutIndex += 2;
        console.log("ökat: " + rutIndex);
        $(".ruta2").removeClass("ruta2-crossed");
        $(".nummer").removeClass("nummer-crossed");
        $(".byttasida li:nth-of-type(" + rutIndex + ")").addClass("ruta2-crossed");

    });
    
    $(".glyphicon-chevron-left").click(function() {
        console.log($(".ruta2-crossed").index());
        var rutIndex = $(".ruta2-crossed").index();
        console.log("startvärde: " + rutIndex);
        rutIndex -= 2;
        console.log("ökat: " + rutIndex);
        $(".ruta2").removeClass("ruta2-crossed");
        $(".nummer").removeClass("nummer-crossed");
        $(".byttasida li:nth-of-type(" + rutIndex + ")").addClass("ruta2-crossed");

    });

    //popup fönster mitt konto

    //popup fönster kontoinfo
    $(".kontinfo a").click(function() {
        $(".blur-popup-mittkonto-kontinfo").show();
    });

    $(".tillbaka-button-kontinfo").click(function() {
        $(".blur-popup-mittkonto-kontinfo").hide();
    });
    //popup fönster adressbok
    $(".adressbok a").click(function() {
        $(".blur-popup-mittkonto-adressbok").show();
    });

    $(".tillbaka-button-adressbok").click(function() {
        $(".blur-popup-mittkonto-adressbok").hide();
    });

});