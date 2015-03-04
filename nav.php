
<!--header-->

<div class="header">
    <div class="container header-container">

        <!--nav-->
        <?php
        include 'LoginPHP.php';
        include 'regPHP.php';
//        include 'Filtrering.php';
        
        ?>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/Logga.png" class="img-responsive" alt="Responsive image"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown KT">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">KILLE</a>
                            <ul class="dropdown-menu" role="menu">
                                <div class="row kt">
                                    <div class="col-xs-4 kt">
                                        <form method="get">
                                        <li><h3>Överdelar</h3></li>
                                        <li><a href="Tshirt.php?plagg=tshirt&gender=kille">T-shirt</a></li>
                                        <li><a href="Tshirt.php?plagg=tröja&gender=kille">Tröjor</a></li>
                                        <li><a href="Tshirt.php?plagg=skjorta&gender=kille">Skjortor</a></li>
                                        <li><a href="Tshirt.php?plagg=jacka&gender=kille">Jackor</a></li>
                                        </form>
                                    </div>
                                    <div class="col-xs-4 kt">
                                        <form method="get">
                                        <li><h3>Underdelar</h3></li>
                                        <li><a href="Tshirt.php?plagg=jeans&gender=kille">Jeans</a></li>
                                        <li><a href="Tshirt.php?plagg=chinos&gender=kille">Chinos</a></li>
                                        </form>
                                    </div>
                                    <div class="col-xs-4 kt">
                                        <form method="get">
                                        <li><h3>Accessoarer</h3></li>
                                        <li><a href="Tshirt.php?plagg=mössa&gender=kille">Mösssor</a></li>
                                        <li><a href="Tshirt.php?plagg=keps&gender=kille">Kepsar</a></li>
                                        </form>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown KT">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">TJEJ</a>
                            <ul class="dropdown-menu" role="menu">
                                <div class="row kt">
                                    <div class="col-xs-4 kt">
                                        <form method="get">
                                        <li><h3>Överdelar</h3></li>
                                        <li><a href="Tshirt.php?plagg=tshirt&gender=tjej">T-shirt</a></li>
                                        <li><a href="Tshirt.php?plagg=tröja&gender=tjej">Tröjor</a></li>
                                        <li><a href="Tshirt.php?plagg=skjorta&gender=tjej">Skjortor</a></li>
                                        <li><a href="Tshirt.php?plagg=jacka&gender=tjej">Jackor</a></li>
                                        </form>
                                    </div>
                                    <div class="col-xs-4 kt">
                                        <form method="get">
                                        <li><h3>Underdelar</h3></li>
                                        <li><a href="Tshirt.php?plagg=tshirt&gender=tjej">Jeans</a></li>
                                        <li><a href="Tshirt.php?plagg=chinos&gender=tjej">Chinos</a></li>
                                        </form>
                                    </div>
                                    <div class="col-xs-4 kt">
                                        <form method="get">
                                        <li><h3>Accessoarer</h3></li>
                                        <li><a href="Tshirt.php?plagg=mössa&gender=tjej">Mösssor</a></li>
                                        <li><a href="Tshirt.php?plagg=keps&gender=tjej">Kepsar</a></li>
                                        </form>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li><a href="#">REA</a></li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="SÖK">
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <?php
                            if(isset($_SESSION["user"])){
                            if ($_SESSION["user"] != null) {
                                echo '<a href="mittkonto.php">MITT KONTO</a>';
                            }else{
                                echo '<a href="#" class="dropdown-toggle loggain-button-dropdown" data-toggle="dropdown" role="button" aria-expanded="false">LOGGA IN</a>';
                            }
                            }else{
                                echo '<a href="#" class="dropdown-toggle loggain-button-dropdown" data-toggle="dropdown" role="button" aria-expanded="false">LOGGA IN</a>';
                            }
                            ?>
                            <!--<a href="#" class="dropdown-toggle loggain-button-dropdown" data-toggle="dropdown" role="button" aria-expanded="false">LOGGA IN</a>-->
                            <ul class="dropdown-menu" role="menu">
                                <div class="row LR">
                                    <div class="col-xs-6 LR">
                                        <h3>Logga in</h3>
                                        <form role="form" method="post">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                                            </div>
                                            <div class="form-group glomtlosen">
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Lösenord" name="password">
                                                <a class="glomtlos" href="#">Glömt lösenord?</a>
                                            </div>

                                            <div class="checkbox">
                                                <input type="submit" class="btn btn-primary huvud-button loggain-button" name="action" value="LOGGA IN">
                                                <label>
                                                    <input type="checkbox"> Kom ihåg mig
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-xs-6 LR">
                                        <h3>Registrera</h3>
                                        <?php ?>
                                        <form role="form" method="post">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="regemail">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Lösenord" name="regpass">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Bekräfta Lösenord">
                                            </div>
                                            <input type="submit" class="btn btn-primary huvud-button loggain-button" name="action" value="REGISTRERA DIG">
                                        </form> 
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li><a href="omoss.php">OM OSS</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <div class="tomkundvagn">
                                    <?php include 'Kundvagn.php';?>
                                    <p>Kundvagnen är tom<p>
                                </div>                                       
                            </ul>
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</div>
