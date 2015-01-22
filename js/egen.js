
//filter

$(document).ready(function() {
    $(".well a").click(function() {

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });
});

//bytta sida

$(document).ready(function() {
    $(".nummer").click(function() {
        $(".ruta2").removeClass("ruta2-crossed");
        $(this).parent(".ruta2").toggleClass("ruta2-crossed");
        $(".nummer").removeClass("nummer-crossed");
        $(this).toggleClass("nummer-crossed");
    });
});

//popup fönster mitt konto

$(document).ready(function() {

    $(".kontinfo a").click(function() {
        $(".popup-mittkonto-kontinfo").show();
    });

    $(".tillbaka-button-kontinfo").click(function() {
        $(".popup-mittkonto-kontinfo").hide();
    });
});

$(document).ready(function() {

    $(".adressbok a").click(function() {
        $(".popup-mittkonto-adressbok").show();
    });

    $(".tillbaka-button-adressbok").click(function() {
        $(".popup-mittkonto-adressbok").hide();
    });
});