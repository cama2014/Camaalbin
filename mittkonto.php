<!DOCTYPE html>
<?php
include 'nav.php';
include 'UpdatePHP.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CAMA - Mitt konto</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="index.css" rel="stylesheet">
        <link href="nav.css" rel="stylesheet">
        <link href="omoss.css" rel="stylesheet">
        <link href="Tshirt.css" rel="stylesheet">
        <link href="produktsida2.css" rel="stylesheet">
        <link href="kassa.css" rel="stylesheet">
        <link href="mittkonto.css" rel="stylesheet">
        <link href="footer.css" rel="stylesheet">



        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!--popup fönster kontoinfo-->        
        <div class="blur-popup-mittkonto-kontinfo">
            <div class="container section-container">  
                <div class="row mittkonto-row">
                    <div class="col-lg-offset-4 col-lg-4 col-lg-offset-4 popup-mittkonto-kontinfo">
                        <div class="popup-ruta">
                            <h3>PERSONLIGA DETALJER</h3>
                            <form method="post">
                                <table class="table">
                                    <tr>
                                        <td><p>Förnamn:</p><p id="fornamn"></p></td>
                                        <td><input type="text" class="form-control" id="exampleInputEmail1" placeholder="Förnamn" name="fornamn"></td>
                                    </tr>
                                    <tr>
                                        <td><p>Efternamn:</p><p id="efternamn"></p></td>
                                        <td><input type="text" class="form-control" id="exampleInputEmail1" placeholder="Efternamn" name="efternamn"></td>
                                    </tr>
                                    <tr>
                                        <td><p>Telefonnummer:</p><p id="telefonnummer"></p></td>
                                        <td><input type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefonnummer" name="telenummer"></td>
                                    </tr>
                                    <tr>
                                        <td><button class="btn btn-primary huvud-button tillbaka-button-kontinfo" type="submit">TILLBAKA</button></td>
                                        <td><input type="submit" class="btn btn-primary huvud-button andra-button-kontinfo" name="action" value="SPARA"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--popup fönster adressbok-->
        <div class="blur-popup-mittkonto-adressbok">
            <div class="container section-container">  
                <div class="row mittkonto-row">
                    <div class="col-lg-offset-4 col-lg-4 col-lg-offset-4 popup-mittkonto-adressbok">
                        <div class="popup-ruta">
                            <h3>ÄNDRA ADRESSBOK</h3>
                            <form method="post">
                            <table class="table">
                                <tr>
                                    <td><p>Förnamn:</p><p id="fornamn"></p></td>
                                    <td><input type="text" class="form-control" id="exampleInputEmail1" placeholder="Förnamn" name="fornamn"></td>
                                </tr>
                                <tr>
                                    <td><p>Efternamn:</p><p id="efternamn"></p></td>
                                    <td><input type="text" class="form-control" id="exampleInputEmail1" placeholder="Eftrenamn" name="efternamn"></td>
                                </tr>
                                <tr>
                                    <td><p>Adress:</p><p id="adress"></p></td>
                                    <td><input type="text" class="form-control" id="exampleInputEmail1" placeholder="Adress" name="adress"></td>
                                </tr>
                                <tr>
                                    <td><p>Ort:</p><p id="ort"></p></td>
                                    <td><input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ort" name="ort"></td>
                                </tr>
                                <tr>
                                    <td><p>Postnummer:</p><p id="postnummer"></p></td>
                                    <td><input type="text" class="form-control" id="exampleInputEmail1" placeholder="Postnummer" name="postnummer"></td>
                                </tr>
                                <tr>
                                    <td><p>Land:</p><p id="land"></p></td>
                                    <td><input type="text" class="form-control" id="exampleInputEmail1" placeholder="Land" name="land"></td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-primary huvud-button tillbaka-button-adressbok" type="submit">TILLBAKA</button></td>
                                    <td><input type="submit" class="btn btn-primary huvud-button andra-button-kontinfo" name="action" value="SPARA"></td>
                                </tr>
                            </table>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--popup fönster logg ut-->
        <div class="blur-popup-mittkonto-loggaut">
            <div class="container section-container">  
                <div class="row mittkonto-row">
                    <div class="col-lg-offset-4 col-lg-4 col-lg-offset-4 popup-mittkonto-loggaut">
                        <div class="popup-ruta">
                            <h3>ÄNDRA LÖSENORD</h3>
                            <table class="table">                              
                                <tr>
                                    <td><p>Nytt lösenord</p></td>
                                    <td><input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nytt lösenord"></td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-primary huvud-button tillbaka-button-loggaut" type="submit">TILLBAKA</button></td>
                                    <td><button class="btn btn-primary huvud-button andra-button-loggaut" type="submit">SPARA</button></td>
                                </tr>
                            </table>                                     
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--header-->    


        <!--section-->



        <div class="container section-container">                       
            <div class="row mittkonto-row">                
                <div class="header-container">
                    <div class="col-lg-12 RN">
                        <div class="headline"><h3><span class="headline-center">MITT KONTO</span></div></h3>
                    </div>
                </div>
                <div class="mittkonto-section-row">



                    <div class="col-lg-4 col-md-4 col-sm-4 mittkonto-rutor">
                        <div class="header-container">
                            <div class="col-lg-12 RN-mittkonto">
                                <div class="headline"><h3><span class="headline-center">KONTAKTINFORMATION</span></div></h3>
                            </div>
                        </div>
                        <div class="kontinfo rutairuta">
                            <table class="table table-info">
                                <tr>
                                    <td><p>Förnamn</p></td>
                                </tr>
                                <tr>
                                    <td><p>Efternamn</p></td>
                                </tr>
                                <tr>
                                    <td><p>E-post</p></td>
                                </tr>
                                <tr>
                                    <td><p>Telefonnummer</p></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Ändra Kontaktinformation</a></td>
                                </tr>
                            </table>                           
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 mittkonto-rutor">
                        <div class="header-container">
                            <div class="col-lg-12 RN-mittkonto">
                                <div class="headline"><h3><span class="headline-center">ADRESSBOK</span></div></h3>
                            </div>
                        </div>
                        <div class="adressbok rutairuta">
                            <table class="table table-info">
                                <tr>
                                    <td><p>Namn</p></td>
                                </tr>
                                <tr>
                                    <td><p>Adress</p></td>
                                </tr>
                                <tr>
                                    <td><p>Ort</p></td>
                                </tr>
                                <tr>
                                    <td><p>Postnummer</p></td>
                                </tr>
                                <tr>
                                    <td><p>Land</p></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Ändra Kontaktinformation</a></td>
                                </tr>
                            </table>                            
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 mittkonto-rutor">
                        <div class="header-container">
                            <div class="col-lg-12 RN-mittkonto">
                                <div class="headline"><h3><span class="headline-center">LOGGA UT</span></div></h3>
                            </div>
                            <div class="loggaut rutairuta">
                                <form method="post">
                                    <!--                                    <a href="kill.php">kill</a>-->
                                    <a href="kill.php" class="btn btn-primary huvud-button loggaut-button" role="button" aria-expanded="false">LOGGA UT</a>
                                    <a href="#">Ändra Lösenord</a>
                                </form>
                            </div>
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
    </body>
</html>