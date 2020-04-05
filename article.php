<?php  session_start() ?>
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
  <div id="fh5co-title-box" style="background-image: url(<?php echo $article['img'] ?> ); background-position:center;height: 350px; background-attachment: scroll;">
    <div class="overlay"></div>
    <div class="page-title">
      <!-- <img src="images/person_1.jpg" alt="Free HTML5 by FreeHTMl5.co"> -->
      <span><?php echo $article['date'] ?></span>
      <h2><?php echo $article['title'] ?></h2>
    </div>
  </div>
  <div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
      <div class="row mx-0">
        <div class="col-12 text-right">
          <a href="edit_article.php?id=<?= $getid ?>"> Modifier l'article</a>
        </div>
        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
          <p>
            <?php echo $article['content'] ?>
          </p>
        </div>


      </div>
    </div>
  </div>
  <div class="container">

  <div class="col-12">
    <a href="add_comments?id=<?= $getid ?>">Ajouter un commentaire</button></a>
  <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Les commentaires :</div>
    <?php
    $getid = $_GET['id'];
    $list = $bdd->query("SELECT * FROM comments WHERE article_id = $getid");
       while ($comments = $list->fetch())
             {
?>
<div class="row">
  <div class="col-10">
    <p style="font-size: 18px;margin-bottom: 5px;font-weight: bold"><?= $comments['pseudo'] ?></p>
    <p><?= $comments['content'] ?></p>
  </div>
  <div class="col-2">
    <?php if (isset($_SESSION['id'])) {
      if ($_SESSION['id'] > 0) { ?>
    <a href="delete_comments.php?id=<?= $comments['id'] ?>">Supprimer ce commentaire</a>
  </div>
<?php }
}
?>
</div>


  <?php }
}
 ?>
</div>

</div>


  <div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
      <div>
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
      </div>
      <div class="owl-carousel owl-theme" id="slider2">
        <div class="item px-2">
          <div class="fh5co_hover_news_img">
            <div class="fh5co_news_img"><img src="images/39-324x235.jpg" alt="" /></div>
            <div>
              <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
              <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
            </div>
          </div>
        </div>
        <div class="item px-2">
          <div class="fh5co_hover_news_img">
            <div class="fh5co_news_img"><img src="images/joe-gardner-75333.jpg" alt="" /></div>
            <div>
              <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
              <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
            </div>
          </div>
        </div>
        <div class="item px-2">
          <div class="fh5co_hover_news_img">
            <div class="fh5co_news_img"><img src="images/ryan-moreno-98837.jpg" alt="" /></div>
            <div>
              <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
              <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
            </div>
          </div>
        </div>
        <div class="item px-2">
          <div class="fh5co_hover_news_img">
            <div class="fh5co_news_img"><img src="images/seth-doyle-133175.jpg" alt="" /></div>
            <div>
              <a href="#" class="d-block fh5co_small_post_heading"><span class="">The top 10 best computer speakers in the market</span></a>
              <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
            </div>
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
