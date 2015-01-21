<!DOCTYPE html>

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

        <!--header-->    
        <?php include 'nav.php'; ?>

        <!--section-->

        <div class="container section-container">
            <div class="row mittkonto-row">
                <div class="header-container">
                    <div class="col-lg-12 RN">
                        <div class="headline"><h3><span class="headline-center">MITT KONTO</span></div></h3>
                    </div>
                </div>

                <div class="col-lg-6 mittkonto-section">
                    <ul>

                        <li><a href="#"><div class="popup-test">

                                    <p>ÄNDRA PERSONLIGA DETALJER</p>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">                                    
                                    <a href="#" class="btn btn-primary huvud-button andra-stang" role="button">ÄNDRA</a>

                                </div><p>Kontaktinformation</p></a></li>

                        <li><a href="#"><div class="popup-test">

                                    <div class="popup-ruta">
                                        <h3>PERSONLIGA DETALJER</h3>
                                        <table class="table">
                                            <tr>
                                                <td><label for="exampleInputPassword1">Förnamn</label></td>
                                                <td><input type="email" class="form-control" id="exampleInputEmail1" placeholder="Förnamn"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputPassword1">Efternamn</label></td>
                                                <td><input type="email" class="form-control" id="exampleInputEmail1" placeholder="Eftrenamn"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputPassword1">E-post</label></td>
                                                <td><input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-post"></td>
                                            </tr>
                                            <tr>
                                                <td><label for="exampleInputPassword1">Telefonnummer</label></td>
                                                <td><input type="email" class="form-control" id="exampleInputEmail1" placeholder="Telefonnummer"></td>
                                            </tr>
                                        </table>

                                        <button class="btn btn-primary huvud-button andra-stang" type="submit">ÄNDRA</button>
                                    </div>

                                </div><p>Kontaktinformation</p></a></li>


                    </ul>
                </div>
                <div class="col-lg-6 mittkonto-section"></div>

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