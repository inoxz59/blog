<div class="container-fluid fh5co_header_bg">
    <div class="container">
        <div class="row">

            <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i
                    class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;Salut </a>
                <div class="d-inline-block fh5co_trading_posotion_relative"><a href="#" class="treding_btn">  <?php
                  if (isset($_SESSION['id'])) {
                    if ($_SESSION['id'] > 0) {
                      echo $_SESSION['username'];
                     } else {
                       echo "visiteur";
                     }
                   } else {
                     echo "visiteur";
                   } ?></a>
                    <div class="fh5co_treding_position_absolute"></div>
                </div>
                <a href="#" class="color_fff fh5co_mediya_setting">Bienvenue sur le blog !</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 fh5co_padding_menu">
              <a href="index.php">            <img src="images/logo.png" alt="img" class="fh5co_logo_width"/></a>

            </div>
            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">

                      <?php if(isset($_SESSION['id'])) {
                        if ($_SESSION['id'] > 0) {

                       ?>
                <div class="text-center d-inline-block">
                    <a class="" href="create_article.php"> Créer un article </a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="" style="color: black" href="logout.php"><u>Deconnexion</u></a>
                </div>
              <?php   }
            } else {

                ?>
                <div class="text-center d-inline-block">
                    <a class="" href="sign_in.php">Connexion</a>
                </div>
                <?php
              } ?>
                <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="img" class="mobile_logo_width"/></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="blog.php">Blog <span class="sr-only">(current)</span></a>
                    </li>




                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">World <span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                            <a class="dropdown-item" href="#">Action in</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li> -->

                    <li class="nav-item ">
                        <a class="nav-link" href="contact.php">Contact <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
