<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CAMA - Kassa</title>

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
            <div class="row kassa-row">                
                <div class="header-container">
                    <div class="col-lg-12 RN">
                        <div class="headline"><h3><span class="headline-center">KASSA</span></div></h3>
                    </div>
                </div>
                <div class="kassa-section-row">

                    <div class="col-lg-4 col-md-4 col-sm-4 kassa-rutor">
                        <div class="header-container">
                            <div class="col-lg-12 RN-mittkonto">
                                <div class="headline"><h3><span class="headline-center">ADRESSUPPGIFTER</span></div></h3>
                            </div>
                        </div>
                        <div class="adressuppgifter rutairuta">
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
                            </table>                           
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 mittkonto-rutor">
                        <div class="header-container">
                            <div class="col-lg-12 RN-mittkonto">
                                <div class="headline"><h3><span class="headline-center">KORT INFO</span></div></h3>
                            </div>
                        </div>
                        <div class="kortinfo rutairuta">
                            <table class="table table-info">
                                <tr>
                                <div class="kort">
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>                                               
                                                <img src="img/visa.jpg" width="80" height="40" class="img-responsive" alt="Responsive image">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>                                               
                                                <img src="img/mastercard.jpg" width="80" height="40" class="img-responsive" alt="Responsive image">
                                            </td>
                                        </tr>
                                </div>
                                <td>
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </td>
                                <td>
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </td>
                                <td>
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </td>
                                <td>
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </td>
                                <td>
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 mittkonto-rutor">
                        <div class="header-container">
                            <div class="col-lg-12 RN-mittkonto">
                                <div class="headline"><h3><span class="headline-center">KUNDVAGNEN</span></div></h3>
                            </div>
                            <div class="kundvagn rutairuta">


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
    </body>
</html>