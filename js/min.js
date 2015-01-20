

$(document).ready(function() {
    $(".well a").click(function() {
//        $(this).hide();


//        $(".ruta").click(function() {
            $(this).children(".ruta").toggleClass("ruta-crossed");
            $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
//        });
               
//        $(".ruta").toggleClass("ruta-crossed");
        
//        $(".marke-typ").toggleClass("marke-typ-crossed");

    });
});


