
//filter

$(document).ready(function() {



    $(".well ul li.Appertiff").click(function() {

        addExistDelNotFound("appertiff");


        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });

    $(".well ul li.Burton").click(function() {

        addExistDelNotFound("burton");

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });

    $(".well ul li.Carhartt").click(function() {

        addExistDelNotFound("carhartt");

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });

    $(".well ul li.DC").click(function() {

        addExistDelNotFound("dc");

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });

    $(".well ul li.Etnies").click(function() {

        addExistDelNotFound("etnies");

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });

    $(".well ul li.Humör").click(function() {

        addExistDelNotFound("humör");

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });

    $(".well ul li.Neff").click(function() {

        addExistDelNotFound("neff");

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });

    $(".well ul li.Skank").click(function() {

        addExistDelNotFound("skank");

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");

    });


    //pris lägst till högst
    $(".well ul li.lTillh").click(function() {

        

        $(this).children(".ruta").toggleClass("ruta-crossed");
        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");
        
        
        $('#pris').val("1");
        console.log($('#pris').val());
        addExistDelNotFound("");
        

    });
//    //pris lägst till högst
//    $(".well ul li.hTilll").click(function() {
//
//
//
//        $(this).children(".ruta").toggleClass("ruta-crossed");
//        $(this).children(".marke-typ").toggleClass("marke-typ-crossed");
//        $(this).children(".farg-typ").toggleClass("farg-typ-crossed");
//
//    });

    //bytta sida

    //sätt startvärden
    $(".byttasida li:nth-of-type(2)").addClass("ruta2-crossed");
    $(".byttasida li:nth-of-type(2) a").addClass("nummer-crossed");

    //klick för
    $(".nummer1").click(function() {
        $(".ruta2").removeClass("ruta2-crossed");
        $(this).parent(".ruta2").toggleClass("ruta2-crossed");
        $(".nummer2").removeClass("nummer-crossed");
        $(this).toggleClass("nummer-crossed");
        $('#page').val("1");
        console.log($('#page').val());
        addExistDelNotFound("");
    });

    $(".nummer2").click(function() {
        $(".ruta2").removeClass("ruta2-crossed");
        $(this).parent(".ruta2").toggleClass("ruta2-crossed");
        $(".nummer1").removeClass("nummer-crossed");
        $(this).toggleClass("nummer-crossed");
        $('#page').val("2");
        console.log($('#page').val());
        addExistDelNotFound("");
    });

    //pilar

    $(".glyphicon-chevron-right").click(function() {
        console.log($(".ruta2-crossed").index());
        var rutIndex = $(".ruta2-crossed").index();
        console.log("startvärde: " + rutIndex);
        rutIndex += 2;
        console.log("ökat: " + rutIndex);
        if (rutIndex < 4) {

            $(".ruta2").removeClass("ruta2-crossed");
            $(".nummer").removeClass("nummer-crossed");
            $(".byttasida li:nth-of-type(" + rutIndex + ")").addClass("ruta2-crossed");
            $(".byttasida li:nth-of-type(" + rutIndex + ") a").addClass("nummer-crossed");

            $('#page').val("2");
            console.log($('#page').val());
            addExistDelNotFound("");
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
            
            $('#page').val("1");
        console.log($('#page').val());
        addExistDelNotFound("");
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

    $(".adressbok a").click(function() {
        $(".blur-popup-mittkonto-adressbok").show();
    });

    $(".tillbaka-button-adressbok").click(function() {
        $(".blur-popup-mittkonto-adressbok").hide();

//    popup fönster loggaut
        $(".loggaut a").click(function() {
            $(".blur-popup-mittkonto-loggaut").show();
        });

        $(".tillbaka-button-loggaut").click(function() {
            $(".blur-popup-mittkonto-loggaut").hide();

        });
    });




    function addExistDelNotFound(klickat) {

        //läs befintliga märken som lagras i input
        var finnsRedan = $('#markeInput').val();

        console.log("finnsredan: " + finnsRedan);
        //gör om string till array
        var finnsArray = $('#markeInput').val().split(',');

        //tar bort tom plats
        if (finnsArray[0] == "") {
            finnsArray.splice(0, 1);
        }

        console.log("array av finnsredan:" + finnsArray);
        //kolla om det klickade finns i arrayen, om så ta bort annars lägg till
        var found = jQuery.inArray(klickat, finnsArray);
        if (found >= 0) {
            console.log('hittad');
            // Element was found, remove it.
            finnsArray.splice(found, 1);

        } else {
            console.log('ny');
            // Element was not found, add it.
            finnsArray.push(klickat);


        }
        console.log(finnsArray);
        //gör om array till sträng
        var skickaStrang = finnsArray.join(',');

        //lagra sträng i input
        $('#markeInput').val(skickaStrang);
        console.log(skickaStrang)
        console.log($('#markeInput').val());
        //kör ajax-fråga m input-data



        var gender = $('#gender').val();
        var plagg = $('#plagg').val();
        var marke = $('#markeInput').val();
        var pris = $('#pris').val();
        var page = $('#page').val();


        $.getJSON("Sortering.php",
                {gender: gender, plagg: plagg, marke: marke, pris: pris, page: page},
        function(data) {
            $('#allaprodukter').children().remove();
            $.each(data, function(index, value) {
                if (index < 16) {

                    $('#allaprodukter').append('<div class="col-lg-3 col-md-3 col-sm-3 fyrabox"><a href="produktsida2.php?namn=' + value.namn + '&plagg=' + value.plagg + '&pris=' + value.pris + '"><div class="beskrivnig"><img src="' + value.bild + '" width="350" height="450" class="img-responsive" alt="Responsive image"><h3>' + value.märke + '</h3><h3>' + value.namn + '</h3><span class="price">' + value.pris + ' SEK</span></div></a></div>');
                }

            });


        });

    }
});
