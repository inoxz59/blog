<?php
session_start();
session_destroy(); // Puis on détruit la session
header("location: sign_in.php" ) ; // On renvoie ensuite sur la page d'accueil
 ?>
