

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CAMA - Produkt</title>

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
        <?php include 'nav.php'; 
        
        
        
        if(isset($_GET["pris"])){
            echo "<input id='pris' type='hidden' value='" . $_GET["pris"] . "'>";
        }
        if(isset($_GET["namn"])){
            echo "<input id='namn' type='hidden' value='" . $_GET["namn"] . "'>";
        }
        if(isset($_GET["plagg"])){
            echo "<input id='plagg' type='hidden' value='" . $_GET["plagg"] . "'>";
        }
        
        if(isset($_GET["bild"])){
            echo "<input id='bild' type='hidden' value='" . $_GET["bild"] . "'>";
            
        }
        
        ?>

        <!--section-->

        <div class="container section-container">


            <div class="headline-container">
                <div class="col-lg-12 RN line-margin">
                    <div class="headline"><h3><span id='h3_namn' class="headline-center"></span></div></h3>
                </div>
            </div>

            <div class="row section-row">
                <div id="produktsida2bild" class="col-lg-6 section">
                    
                </div>

                <div class="container right-div">
                    <div class="col-lg-6 sectiontwo">

                        <h5>Info</h5>
                        <p>Produkt beskrivning lorem ipsum lorem ipsum lorem ipsumlorem ipsum. 
                            Denna produkt kommer göra dig lycklig. Det är en väldigt fin produkt gjord av typ importerad från de egyptiska pyramiderna!</p>
                        <p>Material:110% Bomull.</p>
                        <p>Modellen är fett biff, 185cm och är fotad i storleken M.</p>
                        <p>Art nr: 3458923792835</p>




                        <select class="antal">
                            <option>1 st</option>
                            <option>2 st</option>
                            <option>3 st</option>

                        </select>



                        <br>
                        <br>
                        <div class="btn-group" role="group" aria-label="...">
                            <a id="btn" href="&size=small"> <button class="btn btn btn-primary huvud-button-size">S</button></a>
                            <a id="btn" href="&size=medium"> <button type="button" class="btn btn btn-primary huvud-button-size">M</button></a>
                            <a id="btn" href="&size=large"><button type="button" class="btn btn btn-primary huvud-button-size">L</button></a>
                            <a id="btn" href="&size=xlarge"> <button type="button" class="btn btn btn-primary huvud-button-size">XL</button></a>
                        </div>

                        <h5 id='h5_pris'></h5>
                        <!--                        <a class="btn btn-primary huvud-button button-köp" href="#" role="button">Lägg till i varukorg</a>-->
                        
                        <?php 
                        $query_arr = $_GET;
                        
                        $query = http_build_query($query_arr);
                        
                        ?>
                        
                        <div class="btn btn-primary huvud-button button-köp">Lägg till i varukorg</div>
                        
                        
<!--                        <form method="GET">
                       <input type="submit" name="action" value="Add">
                        </form>-->

                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="headline-container">
                        <div class="col-lg-12 RN storlek ">
                            <div class="headline"><h3><span class="headline-center">STORLEKSGUIDE</span></div></h3>
                        </div>
                    </div>

                    <div id="guide_img">

                        

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
        <script src="js/json_produkter.js"></script>
        
    </body>
</html>
