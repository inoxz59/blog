<?php   session_start(); ?>


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

  <?php
 require_once('include/header.php');
  require_once('require/config.php');
  if (isset($_SESSION['id'])) {
    if ($_SESSION['id'] > 0) {



       if (isset($_GET['id']) AND !empty($_GET['id'])) {



          $getid = htmlspecialchars($_GET['id']);
          $article = $bdd->prepare("SELECT * FROM articles WHERE id = ?");
          $article->execute(array($getid));
          $article = $article->fetch();
          $getid = $_GET['id'];
          $title = $article['title'];
          $content = $article['content'];
          $img = $article['img'];




          ?>

<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                <div>
                          <?php
                          if (isset($_POST['articleedit']) AND !empty($_POST['articleedit'])) {
                          }

                          if (isset($title) AND isset($content) AND isset($img)) {
                            if(!empty($_POST['title']) AND !empty($_POST['img']) AND !empty($_POST['content'])) {

                             $title_edit = $_POST['title'];
                             $content_edit = $_POST['content'];
                             $img_edit = $_POST['img'];
                             $update = $bdd->prepare('UPDATE articles SET title = ?, content = ?, img = ? WHERE id = ?');
                             $update->execute(array($title_edit,$content_edit,$img_edit,$getid));
                             header("Location: article.php?id=".$getid);

}

                             ?>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Modifier l'article</div>

                    <a href="delete_article.php?id=<?= $getid ?>">Supprimer cette article </a>
                    <form action="" method="POST">
                                <!-- <h1>Connexion</h1> -->
                                <div class="row">
                                  <div class="col-6 col-offset-3">

                                                        <label><b>Titre de l'article</b></label>
                                                        <input type="text" class="form-control fh5co_contact_text_box"  placeholder="Entrez le titre de l'article" name="title" value="<?= $title ?>" required>
<br>
                                                        <label><b>Lien de l'image (héberger l'image sur un serveur web d'abbord)</b></label>
                                                        <input type="text"class="form-control fh5co_contact_text_box"   placeholder="Entrez le lien de l'image (ex : http://image.fr/monimage.png )"  value="<?= $img ?>" name="img" required>
                  <br>                                           <label><b>Contenu : </b></label>
                      <textarea class="form-control fh5co_contacts_message" name="content"><?= $content ?>
                      </textarea>
<br>

                                                      <input type="submit"  class="btn contact_btn"  value="Modifier article" name="articleedit">
                                  </div>

                                </div>

                            </form>
                    <div class="row">
                      <div class="col-6 offset-3">

                      </div>

                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php

} else {
  echo "<br><h2><center>L'article n'existe pas</center></h2>";
}
} else {
  echo "<br><h4 class='text-center'>Qu'est-ce que tu fais?</h4>";
}

} else {
  echo "<br><h4 class='text-center'>Tu dois êtres connecté !</h4>";
}
}else {
  echo "<br><h4 class='text-center'>Tu dois êtres connecté !</h4>";
}
?>

</div>
</div>
</div>
</div>
</div>

<?php include('include/footer.php'); ?>
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
</html>
