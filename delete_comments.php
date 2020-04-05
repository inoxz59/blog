<?php
session_start();
require_once('require/config.php');
if (isset($_SESSION['id'])) {
  if ($_SESSION['id'] > 0) {



if (isset($_GET['id']) AND !empty($_GET['id'])) {
    $getid = htmlspecialchars($_GET['id']);
    $suppr = $bdd->prepare('DELETE FROM comments WHERE id = ?');
    $suppr->execute(array($getid));
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
  }
} else {

  header("Location: blog.php");
}
?>
