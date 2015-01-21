

$(document).ready(function() {
    $(".well a").click(function() {

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });
});

$(document).ready(function() {
    $(".mittkonto-section a").click(function() {

        $(this).children(".popup-test").toggleClass("popup-test-up");
//        $(this).children(".andra-stang").hide("popup-test-up");

    });
});