<?php
require_once('require/config.php');
session_start();


?>

<!DOCTYPE html>
<!--
	24 News by FreeHTML5.co
	Twitter: https://twitter.com/fh5co
	Facebook: https://fb.com/fh5co
	URL: https://freehtml5.co
-->
<html lang="en" class="no-js">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>24 News — Free Website Template, Free HTML5 Template by FreeHTML5.co</title>
    <link href="css/media_query.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link href="css/style_1.css" rel="stylesheet" type="text/css"/>
    <!-- Modernizr JS -->
    <script src="js/modernizr-3.5.0.min.js"></script>
</head>
<body>
<?php include('include/header.php'); ?>
<div class="container-fluid contact_us_bg_img">
    <div class="container">
        <div class="row">
            <a href="#" class="fh5co_con_123"><i class="fa fa-home"></i></a>
            <a href="#" class="fh5co_con pt-2"> Connectez-vous !</a>
        </div>
    </div>
</div>

<div class="container-fluid mb-4">
    <div class="container">
        <div class="col-12 text-center contact_margin_svnit ">

            <div class=" fh5co_heading py-2">Se connecter</div>
        </div>
        <form action="sign_in_procress.php" method="POST">
                    <!-- <h1>Connexion</h1> -->
                    <div class="row">
                      <div class="col-6 col-offset-3">

                                            <label><b>Nom d'utilisateur</b></label>
                                            <input type="text" class="form-control fh5co_contact_text_box"  placeholder="Entrer le nom d'utilisateur" name="username" required>

                                            <label><b>Mot de passe</b></label>
                                            <input type="password"class="form-control fh5co_contact_text_box"   placeholder="Entrer le mot de passe" name="password" required>
<br>
                                            <input type="submit"  class="btn contact_btn"  id='submit' value='Se connecter' >
                                            <?php
                                            if(isset($_GET['erreur'])){
                                                $err = $_GET['erreur'];
                                                if($err==1 || $err==2)
                                                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                                            }
                                            ?>
                      </div>

                    </div>

                </form>



        <!-- <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <form class="row" method="POST">
                    <div class="col-12 py-3">
                        <input type="text" class="form-control fh5co_contact_text_box" placeholder="Votre pseudo" value="<?php// if (isset($userconnect)) {
                          // echo $userconnect;
                        } ?>" name="userconnect" />
                    </div>
                    <div class="col-12 py-3">
                        <input type="password" class="form-control fh5co_contact_text_box" placeholder="Votre mot de passe" value="" name="mdpconnect"/>
                    </div>


                    <div class="col-12 py-3 text-center">
                      <input type="submit" class="btn contact_btn"  value="Se connecter" name="formconnexion">
                    </div>
                </form>
            </div>
        </div> -->
    </div>
</div>
<?php include('include/footer.php');
?>


<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Main -->
<script src="js/main.js"></script>

</body>
