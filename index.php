<?php session_start(); ?>
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
<?php include('include/header.php');
require_once('require/config.php');

?>
<div class="container-fluid paddding mb-5">
    <div class="row mx-0">
      <?php
      $listd = $bdd->query("SELECT * FROM articles WHERE articles.index = 1 ORDER BY id DESC LIMIT 1");
                ?>
  <?php     while ($donnees = $listd->fetch())
      {

    ?>
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
            <div class="fh5co_suceefh5co_height"><img src="<?php echo $donnees['img']; ?>" alt="img"/>
                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
                    <div class=""><a href="article.php?id=<?php echo $donnees['id']; ?>" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo $donnees['date']; ?>
                    </a></div>
                    <div class=""><a href="article.php?id=<?php echo $donnees['id']; ?>" class="fh5co_good_font"> <?php echo $donnees['title']; ?> </a></div>
                </div>
            </div>
        </div>
      <?php   }
          ?>
        <div class="col-md-6">
            <div class="row">
              <?php
              $listd = $bdd->query("SELECT * FROM articles WHERE articles.index = 1 ORDER BY id DESC LIMIT 2 OFFSET 1");
                        ?>
          <?php     while ($donnees = $listd->fetch())
              {

            ?>
                <div class="col-md-12 col-12 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2"><img src="<?php echo $donnees['img']; ?>" alt="img"/>
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                            <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo $donnees['date']; ?>  </a></div>
                            <div class=""><a href="article.php?id=<?php echo $donnees['id']; ?>" class="fh5co_good_font_2"> <?php echo $donnees['title']; ?>  </a></div>
                        </div>
                    </div>
                </div>
          <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid pb-4 pt-5">
</div>


    <?php
    $list = $bdd->query("SELECT * FROM articles ORDER BY id DESC LIMIT 4");
              ?>
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Les derniers articles (4)</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
<?php     while ($donnees = $list->fetch())
    {
    ?>

            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="<?php echo htmlspecialchars($donnees['img']); ?>" alt=""/></div>
                    <div>
                        <a href="article.php?id=<?php echo htmlspecialchars($donnees['id']); ?>" class="d-block fh5co_small_post_heading"><span class=""><?php echo htmlspecialchars($donnees['title']) ; ?></span></a>
                        <div class="c_g"><i class="fa fa-clock-o"></i> Le <?php echo htmlspecialchars($donnees['date']); ?></div>
                    </div>
                </div>
            </div>


<?php } ?>
        </div>
    </div>
</div>
</div>
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Les plus consultés
                </div>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="images/nathan-mcbride-229637.jpg" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
                        nostrud quis xercitation ullamco. </a> <a href="single.html" class="fh5co_mini_time py-3"> Thomson Smith -
                        April 18,2016 </a>
                        <div class="fh5co_consectetur"> Amet consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </div>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="images/ryan-moreno-98837.jpg" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
                        nostrud quis xercitation ullamco. </a> <a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
                        April 18,2016 </a>
                        <div class="fh5co_consectetur"> Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore.
                        </div>
                        <ul class="fh5co_gaming_topikk pt-3">
                            <li> Why 2017 Might Just Be the Worst Year Ever for Gaming</li>
                            <li> Ghost Racer Wants to Be the Most Ambitious Car Game</li>
                            <li> New Nintendo Wii Console Goes on Sale in Strategy Reboot</li>
                            <li> You and Your Kids can Enjoy this News Gaming Console</li>
                        </ul>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img">
                                <img src="images/photo-1449157291145-7efd050a4d0e-578x362.jpg" alt=""/>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
                        nostrud quis xercitation ullamco. </a> <a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
                        April 18,2016 </a>
                        <div class="fh5co_consectetur"> Quis nostrud xercitation ullamco laboris nisi aliquip ex ea commodo
                            consequat.
                        </div>
                    </div>
                </div>
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="images/office-768x512.jpg" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <a href="single.html" class="fh5co_magna py-2"> Magna aliqua ut enim ad minim veniam quis
                        nostrud quis xercitation ullamco. </a> <a href="#" class="fh5co_mini_time py-3"> Thomson Smith -
                        April 18,2016 </a>
                        <div class="fh5co_consectetur"> Amet consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </div>
                    </div>
                </div>
            </div>

        <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
            <div class="col-12 text-center pb-4 pt-4">
                <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
                <a href="#" class="btn_pagging">1</a>
                <a href="#" class="btn_pagging">2</a>
                <a href="#" class="btn_pagging">3</a>
                <a href="#" class="btn_pagging">...</a>
                <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
             </div>
        </div>
    </div>
</div>
</div>
<?php include('include/footer.php'); ?>

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
