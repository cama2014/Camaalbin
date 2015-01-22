

$(document).ready(function() {
    $(".well a").click(function() {

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });
});

$(document).ready(function() {
    $(".nummer").click(function() {
        $(".ruta2").removeClass("ruta2-crossed");
        $(this).parent(".ruta2").toggleClass("ruta2-crossed");
        $(".nummer").removeClass("nummer-crossed");     
        $(this).toggleClass("nummer-crossed");
    });
});

$(document).ready(function() {
    $(".mittkonto-section a").click(function() {

        $(this).children(".popup-test").show("popup-test-up");

    });
});

$(document).ready(function() {
    $(".andra-button").click(function() {

        $(".popup-test").hide("popup-test-up");

    });
});
