<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CAMA - Hem</title>

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
        <?php include 'nav.php'; ?>
        

        <!--section-->

        <div class="container section-container">
            <div class="row">
                <div class="row slidshow-row">
                    <div class="col-lg-12 slidshow">        
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="img/camabild1.jpg" width="1280" height="720" alt="">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/camabild2.jpg" width="1280" height="720" alt="">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/camabild3.jpg" width="1280" height="720" alt="">
                                    <div class="carousel-caption">
                                    </div>
                                </div>      
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>       
                    </div>
                </div>

                <div class="row fyrabox-row">
                    <div class="header-container">
                        <div class="col-lg-12 RN">
                            <div class="headline"><h3><span class="headline-center">REA</span></div></h3>
                        </div>
                    </div>
                    <a href="#"><div class="col-lg-3 col-md-3 col-sm-3 fyrabox"><img src="img/rsz_camajacka.jpg"  class="img-responsive" alt="Responsive image"></div></a>
                    <a href="#"><div class="col-lg-3 col-md-3 col-sm-3 fyrabox"><img src="img/rsz_camajeans.jpg" class="img-responsive" alt="Responsive image"></div></a>
                    <a href="#"><div class="col-lg-3 col-md-3 col-sm-3 fyrabox"><img src="img/rsz_camakeps.jpg" class="img-responsive" alt="Responsive image"></div></a>
                    <a href="#"><div class="col-lg-3 col-md-3 col-sm-3 fyrabox"><img src="img/rsz_camaskjorta.jpg" class="img-responsive" alt="Responsive image"></div></a>
                </div>

                <div class="row fyrabox-row">
                    <div class="header-container">
                        <div class="col-lg-12 RN">
                            <div class="headline"><h3><span class="headline-center">NYHETER</span></div></h3>
                        </div>
                    </div>
                    <a href="#"><div class="col-lg-3 col-md-3 col-sm-3 fyrabox"><img src="img/rsz_camatroja.jpg" width="350" height="550" class="img-responsive" alt="Responsive image"></div></a>
                    <a href="#"><div class="col-lg-3 col-md-3 col-sm-3 fyrabox"><img src="img/rsz_camamossa.jpg" width="350" height="550" class="img-responsive" alt="Responsive image"></div></a>
                    <a href="#"><div class="col-lg-3 col-md-3 col-sm-3 fyrabox"><img src="img/rsz_camachinos.jpg" width="350" height="550" class="img-responsive" alt="Responsive image"></div></a>
                    <a href="#"><div class="col-lg-3 col-md-3 col-sm-3 fyrabox"><img src="img/rsz_camatshirt.jpg" width="350" height="550" class="img-responsive" alt="Responsive image"></div></a>
                </div>

            </div>
        </div>  

        <!--footer-->
        <?php include 'footer.php'; ?>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
