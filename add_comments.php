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
  <link href="css/media_query.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="css/animate.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css" />
  <!-- Bootstrap CSS -->
  <link href="css/style_1.css" rel="stylesheet" type="text/css" />
  <!-- Modernizr JS -->
  <script src="js/modernizr-3.5.0.min.js"></script>
</head>

<body class="single">
  <?php include('include/header.php');
require_once('require/config.php');
if (!isset($_GET['id'])) {

  echo "<center style='margin-top: 50px'>Veuillez choisir un article !</center>";
}
if (isset($_GET['id']) AND !empty($_GET['id'])) {
  $getid = htmlspecialchars($_GET['id']);
  $article = $bdd->prepare("SELECT * FROM articles WHERE id = ?");
  $article->execute(array($getid));
  $article = $article->fetch();
 ?>
  <div id="fh5co-title-box" style="background-image: url(<?= $article['img'] ?> ); background-position:center;height: 350px; background-attachment: scroll;">
    <div class="overlay"></div>
    <div class="page-title">
      <!-- <img src="images/person_1.jpg" alt="Free HTML5 by FreeHTMl5.co"> -->
      <span><?= $article['date'] ?></span>
      <h2><?= $article['title'] ?></h2>
    </div>
  </div>
<?php     if(isset($_POST['submitcomment'])) {

      if(isset($_POST['pseudo']) AND isset($_POST['commentaire']) AND isset($_POST['robot']) AND !empty($_POST['pseudo'])
      AND !empty($_POST['commentaire']) AND !empty($_POST['robot']) AND isset($_GET['id'])) {      $pseudo =   htmlspecialchars($_POST['pseudo']);
      $commentaire =  htmlspecialchars($_POST['commentaire']);
      $robot = htmlspecialchars($_POST['robot']);
      if ($robot = 5) {
        if (strlen($pseudo)  < 25) {
          $req = $bdd->prepare("INSERT INTO comments(pseudo,article_id,content)  VALUES(?, ?, ?)");
          $req->execute(array($pseudo,$getid,$commentaire));
          echo "<br><h4 class='text-center'>Votre message est bien envoyé !</h4>";
        } else {
          echo "<br><h4 class='text-center'>Votre pseudo dépasse les 25 caractères!</h4>";
        }

      }


    } else {
      echo "<br><h4 class='text-center'>Veuillez remplir tous les champs!</h4>";
      }
    } ?>


  <div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
      <div class="row mx-0">
        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
          <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Poster un commentaire</div>
            <form  method="POST">
              <!-- <h1>Connexion</h1> -->
              <div class="row">
                <div class="col-6 col-offset-3">

                  <label><b>Ton pseudo</b></label>
                  <input type="text" class="form-control fh5co_contact_text_box" placeholder="Votre pseudo" name="pseudo" required>
                  <br>
                  <label><b>Contenu du commentaire: </b></label>
                  <textarea class="form-control" value="r" name="commentaire">
                    </textarea><br>
                  <label><b>Combien fait 2+3 ?</b></label>
                  <input type="num" class="form-control fh5co_contact_text_box" placeholder="Répondez à la question" name="robot" required>

                  <br>
                  <input type="submit" class="btn contact_btn" value="Poster mon commentaire" name="submitcomment">
                </div>

              </div>

            </form>
            <div class="row">


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php }
 ?>

 <div class="container">
 <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Les commentaires de l'article <?= $article['title'] ?>:</div>
   <?php
   $getid = $_GET['id'];
   $list = $bdd->query("SELECT * FROM comments WHERE article_id = $getid");
      while ($article = $list->fetch())
            {
?>
   <p style="font-size: 18px;margin-bottom: 5px;font-weight: bold"><?= $article['pseudo'] ?></p>
   <p><?= $article['content'] ?></p>

 <?php }

?>
</div>


<?php include('include/footer.php'); ?>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Parallax -->
  <script src="js/jquery.stellar.min.js"></script>
  <!-- Main -->
  <script src="js/main.js"></script>
  <script>
    if (!navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)) {
      $(window).stellar();
    }
  </script>

</body>

</html>
