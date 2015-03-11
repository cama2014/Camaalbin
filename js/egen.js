
//filter

$(document).ready(function() {

    var kategoriArray = [];

    $(".well ul li.Appertiff").click(function() {

        addExistDelNotFound("appertiff", kategoriArray);

        
        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });

    $(".well ul li.Burton").click(function() {

        addExistDelNotFound("burton", kategoriArray);

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });

    $(".well ul li.Carhartt").click(function() {

        addExistDelNotFound("carhartt", kategoriArray);

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });

    $(".well ul li.DC").click(function() {

        addExistDelNotFound("dc", kategoriArray);

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });

    $(".well ul li.Etnies").click(function() {

        addExistDelNotFound("etnies", kategoriArray);

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });

    $(".well ul li.Humör").click(function() {

        addExistDelNotFound("humör", kategoriArray);

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });

    $(".well ul li.Neff").click(function() {

        addExistDelNotFound("neff", kategoriArray);

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });

    $(".well ul li.Skank").click(function() {

        addExistDelNotFound("skank", kategoriArray);

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });


    //pris lägst till högst
    $(".well ul li.lTillh").click(function() {



        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });
    //pris lägst till högst
    $(".well ul li.hTilll").click(function() {



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
        if (rutIndex < 6) {

            $(".ruta2").removeClass("ruta2-crossed");
            $(".nummer").removeClass("nummer-crossed");
            $(".byttasida li:nth-of-type(" + rutIndex + ")").addClass("ruta2-crossed");
            $(".byttasida li:nth-of-type(" + rutIndex + ") a").addClass("nummer-crossed");
        }
    });

    $(".glyphicon-chevron-left").click(function() {
        console.log($(".ruta2-crossed").index());
        var rutIndex = $(".ruta2-crossed").index();
        console.log("startvärde: " + rutIndex);
        rutIndex -= 0;
        console.log("minskat: " + rutIndex);
        if (rutIndex > 1) {

            $(".ruta2").removeClass("ruta2-crossed");
            $(".nummer").removeClass("nummer-crossed");
            $(".byttasida li:nth-of-type(" + rutIndex + ")").addClass("ruta2-crossed");
            $(".byttasida li:nth-of-type(" + rutIndex + ") a").addClass("nummer-crossed");
        }
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



function addExistDelNotFound(marke, kategoriArray) {
    var found = jQuery.inArray(marke, kategoriArray);
    if (found >= 0) {
        // Element was found, remove it.
        kategoriArray.splice(found, 1);
        return false;
    } else {
        // Element was not found, add it.
        kategoriArray.push(marke);
        return true;
    }


}