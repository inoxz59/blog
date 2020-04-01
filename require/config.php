<?php
$bdd_username = 'root';
$bdd_password = '';
$bdd_name     = 'blog';
$bdd_host     = 'localhost';
$bdd = mysqli_connect($bdd_host, $bdd_username, $bdd_password,$bdd_name)
       or die('could not connect to database');
$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
// Fonction qui récupère tous les articles

?>
