<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CAMA - T-shirts</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="index.css" rel="stylesheet">
        <link href="Tshirt.css" rel="stylesheet">
        <link href="nav.css" rel="stylesheet">
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
                <div class="col-lg-2 filterdel">
                    <div class="filter">
                        <ul class="filter-lista">
                            <li><h3>KILLE</h3></li>
                            <li>
                                <a class="btn btn-primary" data-toggle="collapse" href="#marke" aria-expanded="false" aria-controls="marke">
                                    MÄRKE
                                </a>
                                <div class="collapse" id="marke">
                                    <div class="well">
                                        <ul>
                                            <li><a href="#"><p>Appertiff</p></a></li>
                                            <li><a href="#"><p>Burton</p></a></li>
                                            <li><a href="#"><p>Carhartt</p></a></li>
                                            <li><a href="#"><p>DC</p></a></li>
                                            <li><a href="#"><p>Etnies</p></a></li>
                                            <li><a href="#"><p>Humör</p></a></li>
                                            <li><a href="#"><p>Neff</p></a></li>
                                            <li><a href="#"><p>Skank</p></a></li>
                                        </ul>
                                    </div>
                                </div>                           
                            </li>                               
                        </ul>
                    </div>
                    <div class="filter">
                        <ul class="filter-lista">                                                 
                            <li>
                                <a class="btn btn-primary" data-toggle="collapse" href="#farg" aria-expanded="false" aria-controls="farg">
                                    FÄRG
                                </a>
                                <div class="collapse" id="farg">
                                    <div class="well">
                                        <ul>
                                            <li><a href="#"><span class="color-swatch" style="background-color: blue;"><p>Blå</p></span></a></li>
                                            <li><a href="#"><span class="color-swatch" style="background-color: brown;"><p>Brun</p></span></a></li>
                                            <li><a href="#"><span class="color-swatch" style="background-color: green;"><p>Grön</p></span></a></li>
                                            <li><a href="#"><span class="color-swatch" style="background-color: yellow;"><p>Gul</p></span></a></li>
                                            <li><a href="#"><span class="color-swatch" style="background-color: pink;"><p>Rosa</p></span></a></li>
                                            <li><a href="#"><span class="color-swatch" style="background-color: red;"><p>Röd</p></span></a></li>
                                            <li><a href="#"><span class="color-swatch" style="background-color: black;"><p>Svart</p></span></a></li>
                                            <li><a href="#"><span class="color-swatch" style="background-color: white;"><p>vit</p></span></a></li>                                          
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
                                            <li><a href="#"><p>Lägst till högst</p></a></li>
                                            <li><a href="#"><p>Högst till lägst</p></a></li>                                                                                                                                
                                        </ul>
                                    </div>
                                </div>                           
                            </li>                               
                        </ul>
                    </div>                   
                    <div class="filter">
                        <ul class="filter-lista">                                                 
                            <li>
                                <a class="btn btn-primary button-filter" href="#" role="button">RENSA FILTER</a>                                                                                   
                            </li>                               
                        </ul>
                    </div>
                </div>                   

                <div class="col-lg-10">
                    <div class="row fyrabox-row">
                        <div class="headline-container">
                            <div class="col-lg-12 RN">
                                <div class="headline"><h3><span class="headline-center">T-SHIRTS</span></div></h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 fyrabox">                         
                            <a href="#"><div class="beskrivnig">
                                    <img src="img/tshirtbildtest.jpg" width="350" height="450" class="img-responsive" alt="Responsive image">
                                    <h3>Skank</h3>                               
                                    <br>
                                    <span class="price">499 SEK</span>
                                </div></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 fyrabox">                         
                            <a href="#"><div class="beskrivnig">
                                    <img src="img/tshirtbildtest.jpg" width="350" height="450" class="img-responsive" alt="Responsive image">
                                    <h3>Skank</h3>                               
                                    <br>
                                    <span class="price">499 SEK</span>
                                </div></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 fyrabox">                         
                            <a href="#"><div class="beskrivnig">
                                    <img src="img/tshirtbildtest.jpg" width="350" height="450" class="img-responsive" alt="Responsive image">
                                    <h3>Skank</h3>                               
                                    <br>
                                    <span class="price">499 SEK</span>
                                </div></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 fyrabox">                         
                            <a href="#"><div class="beskrivnig">
                                    <img src="img/tshirtbildtest.jpg" width="350" height="450" class="img-responsive" alt="Responsive image">
                                    <h3>Skank</h3>                               
                                    <br>
                                    <span class="price">499 SEK</span>
                                </div></a>
                        </div>
                    </div>
                    <div class="row fyrabox-row">
                        <div class="col-lg-3 col-md-3 col-sm-3 fyrabox">                         
                            <a href="#"><div class="beskrivnig">
                                    <img src="img/tshirtbildtest.jpg" width="350" height="450" class="img-responsive" alt="Responsive image">
                                    <h3>Skank</h3>                               
                                    <br>
                                    <span class="price">499 SEK</span>
                                </div></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 fyrabox">                         
                            <a href="#"><div class="beskrivnig">
                                    <img src="img/tshirtbildtest.jpg" width="350" height="450" class="img-responsive" alt="Responsive image">
                                    <h3>Skank</h3>                               
                                    <br>
                                    <span class="price">499 SEK</span>
                                </div></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 fyrabox">                         
                            <a href="#"><div class="beskrivnig">
                                    <img src="img/tshirtbildtest.jpg" width="350" height="450" class="img-responsive" alt="Responsive image">
                                    <h3>Skank</h3>                               
                                    <br>
                                    <span class="price">499 SEK</span>
                                </div></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 fyrabox">                         
                            <a href="#"><div class="beskrivnig">
                                    <img src="img/tshirtbildtest.jpg" width="350" height="450" class="img-responsive" alt="Responsive image">
                                    <h3>Skank</h3>                               
                                    <br>
                                    <span class="price">499 SEK</span>
                                </div></a>
                        </div>
                    </div>
                    <div class="row fyrabox-row">
                        <div class="col-lg-3 col-md-3 col-sm-3 fyrabox">                         
                            <a href="#"><div class="beskrivnig">
                                    <img src="img/tshirtbildtest.jpg" width="350" height="450" class="img-responsive" alt="Responsive image">
                                    <h3>Skank</h3>                               
                                    <br>
                                    <span class="price">499 SEK</span>
                                </div></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 fyrabox">                         
                            <a href="#"><div class="beskrivnig">
                                    <img src="img/tshirtbildtest.jpg" width="350" height="450" class="img-responsive" alt="Responsive image">
                                    <h3>Skank</h3>                               
                                    <br>
                                    <span class="price">499 SEK</span>
                                </div></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 fyrabox">                         
                            <a href="#"><div class="beskrivnig">
                                    <img src="img/tshirtbildtest.jpg" width="350" height="450" class="img-responsive" alt="Responsive image">
                                    <h3>Skank</h3>                               
                                    <br>
                                    <span class="price">499 SEK</span>
                                </div></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 fyrabox">                         
                            <a href="#"><div class="beskrivnig">
                                    <img src="img/tshirtbildtest.jpg" width="350" height="450" class="img-responsive" alt="Responsive image">
                                    <h3>Skank</h3>                               
                                    <br>
                                    <span class="price">499 SEK</span>
                                </div></a>
                        </div>
                    </div>
                    <div class="row fyrabox-row">
                        <div class="col-lg-3 col-md-3 col-sm-3 fyrabox">                         
                            <a href="#"><div class="beskrivnig">
                                    <img src="img/tshirtbildtest.jpg" width="350" height="450" class="img-responsive" alt="Responsive image">
                                    <h3>Skank</h3>                               
                                    <br>
                                    <span class="price">499 SEK</span>
                                </div></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 fyrabox">                         
                            <a href="#"><div class="beskrivnig">
                                    <img src="img/tshirtbildtest.jpg" width="350" height="450" class="img-responsive" alt="Responsive image">
                                    <h3>Skank</h3>                               
                                    <br>
                                    <span class="price">499 SEK</span>
                                </div></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 fyrabox">                         
                            <a href="#"><div class="beskrivnig">
                                    <img src="img/tshirtbildtest.jpg" width="350" height="450" class="img-responsive" alt="Responsive image">
                                    <h3>Skank</h3>                               
                                    <br>
                                    <span class="price">499 SEK</span>
                                </div></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 fyrabox">                         
                            <a href="#"><div class="beskrivnig">
                                    <img src="img/tshirtbildtest.jpg" width="350" height="450" class="img-responsive" alt="Responsive image">
                                    <h3>Skank</h3>                               
                                    <br>
                                    <span class="price">499 SEK</span>
                                </div></a>
                        </div>

                        <div class="col-lg-12 byttsida">

                            <ul>
                                <li><a href="#"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a></li>
                                <li class="test1"><a href="#" class="test2">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
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

    </body>
</html>
