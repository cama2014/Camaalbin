

$(document).ready(function() {
    $(".well a").click(function() {

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });
});
