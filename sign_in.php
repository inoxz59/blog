<?php
session_start();
require_once('require/config.php');

if (isset($_POST['formconnect'])) {
  $mailconnect = htmlspecialchars($_POST['mailconnect']);
  $mdpconnect = htmlspecialchars($_POST['mdpconnect']);
  if (!empty($mailconnect) AND !empty($mdpconnect)) {
    $requser = $bdd->prepare("SELECT * FROM users WHERE mail = ? AND password = ?");
    $requser->execute(array($mailconnect, $mdpconnect));
    $userexist = $requser->rowCount();
    if ($userexist == 1) {
      $userinfo = $requser->fetch();
      $_SESSION['id'] = $userinfo['id'];
      $_SESSION['username'] = $userinfo['username'];
      $_SESSION['mail'] = $userinfo['mail'];
      header("Location: index.php?id=".$_SESSION['id']);
    } else {
      $erreur = "<h4>Mauvais mail ou mot de passe</h4>";
    }

  } else {
    $erreur = "<h4>Tous les champs doivent être complétés</h4>";
  }
}

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
        <?php if(isset($erreur)){
        echo  $erreur ;
                } ?>
            <div class="col-md-7 mt-20">
              <form  method="POST">
              <input type="email"  placeholder="E-mail"  class="form-control fh5co_contact_text_box" value="<?php if (isset($mailconnect)) {
                echo $mailconnect;
              } ?>" name="mailconnect"><br>
                <input type="password"  placeholder="Mot de passe"  class="form-control fh5co_contact_text_box" value="" name="mdpconnect"><br>
                <input type="submit"  class="btn contact_btn" value="Se connecter" name="formconnect">
                      </form>
            </div>
                  <div class="col-12">

                  </div>

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
