<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CAMA - T-shirts</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="index.css" rel="stylesheet">
        <link href="nav.css" rel="stylesheet">
        <link href="omoss.css" rel="stylesheet">
        <link href="Tshirt.css" rel="stylesheet">
        <link href="produktsida2.css" rel="stylesheet">
        <link href="kassa.css" rel="stylesheet">
        <link href="footer.css" rel="stylesheet">



        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!--header-->    
        <?php
        include 'nav.php';
        
        if(isset($_GET["gender"])){
            echo "<input id='gender' type='hidden' value='" . $_GET["gender"] . "'>";
        }
        if(isset($_GET["plagg"])){
            echo "<input id='plagg' type='hidden' value='" . $_GET["plagg"] . "'>";
        }
        if(isset($_GET["marke"])){
            echo "<input id='marke' type='hidden' value='" . $_GET["marke"] . "'>";
        }
        
        
        
        
        if(isset($_GET["pris"])){
            echo "<input id='pris' type='hidden' value='" . $_GET["pris"] . "'>";
        }
        if(isset($_GET["namn"])){
            echo "<input id='namn' type='hidden' value='" . $_GET["namn"] . "'>";
        }
        ?>

        <!--section-->
        <form>
            <input type="hidden" value="" name="markeInput" id="markeInput">
        </form>
        <div class="container section-container">
            <div class="row">
                <div class="col-lg-2 filterdel">
                    <div class="filter">
                        <ul class="filter-lista">
                            <li><h3 id="h3_kon"></h3></li>
                            <li>
                                <a class="btn btn-primary" data-toggle="collapse" href="#marke" aria-expanded="false" aria-controls="marke">
                                    MÄRKE
                                </a>
                                <div class="collapse" id="marke">
                                    <div class="well">
                                        <ul>
                                            <li class="Appertiff"><div class="ruta"></div><span class="marke-typ" style="background-color: whitesmoke;"><p>Appertiff</p></span></li>
                                            <li class="Burton"><div class="ruta"></div><span class="marke-typ" style="background-color: whitesmoke;"><p>Burton</p></span></li>
                                            <li class="Carhartt"><div class="ruta"></div><span class="marke-typ" style="background-color: whitesmoke;"><p>Carhartt</p></span></li>
                                            <li class="DC"><div class="ruta"></div><span class="marke-typ" style="background-color: whitesmoke;"><p>DC</p></span></li>
                                            <li class="Etnies"><div class="ruta"></div><span class="marke-typ" style="background-color: whitesmoke;"><p>Etnies</p></span></li>
                                            <li class="Humör"><div class="ruta"></div><span class="marke-typ" style="background-color: whitesmoke;"><p>Humör</p></span></li>
                                            <li class="Neff"><div class="ruta"></div><span class="marke-typ" style="background-color: whitesmoke;"><p>Neff</p></span></li>
                                            <li class="Skank"><div class="ruta"></div><span class="marke-typ" style="background-color: whitesmoke;"><p>Skank</p></span></li>
                                        </ul>
                                    </div>
                                </div>                           
                            </li>                               
                        </ul>
                    </div>
                    <div class="filter">
                        <ul class="filter-lista">                                                 
                            <li>
                                <a class="btn btn-primary" data-toggle="collapse" href="#pris" aria-expanded="false" aria-controls="pris">
                                    PRIS
                                </a>

                                <div class="collapse" id="pris">
                                    <div class="well">
                                        <ul>
                                            <li class="lTillh"><div class="ruta"></div><span class="marke-typ" style="background-color: whitesmoke;"><p>Lägst till högst</p></span></li>
                                            <li class="hTilll"><div class="ruta"></div><span class="marke-typ" style="background-color: whitesmoke;"><p>Högst till lägst</p></span></li>                                                                                                                               
                                        </ul>
                                    </div>
                                </div>                           
                            </li>                               
                        </ul>
                    </div>                   
                    <div class="filter">
                        <ul class="filter-lista">                                                 
                            <li>
                                <input type="submit" name="login" value="RENSA FILTER" class="btn btn-primary huvud-button button-filter">
                            </li>                               
                        </ul>
                    </div>
                </div>                   

                <div class="col-lg-10">
                    <div class="row fyrabox-row">
                        <div class="headline-container">
                            <div class="col-lg-12 RN">
                                <div class="headline"><h3><span id='h3_plagg' class="headline-center"></span></div></h3>
                            </div>
                        </div>

                        <div id="allaprodukter">
                            
                        </div>


                    </div>
                    <div class="col-lg-12 byttasida">
                        <ul>
                            <li><a href="#"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a></li>
                            <li class="ruta2"><a href="#" class="nummer">1</a></li>
                            <li class="ruta2"><a href="#" class="nummer">2</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>  

    <!--footer-->
    <?php include 'footer.php'; ?>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/egen.js"></script>
    <script src="js/json_produkter.js"></script>
    <script src="js/json_kundvagn.js"></script>
    
</body>
</html>
