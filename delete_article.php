<?php
session_start();
require_once('require/config.php');
if (isset($_SESSION['id'])) {
  if ($_SESSION['id'] > 0) {



if (isset($_GET['id']) AND !empty($_GET['id'])) {
    $getid = htmlspecialchars($_GET['id']);
    $suppr = $bdd->prepare('DELETE FROM articles WHERE id = ?');
    $suppr->execute(array($getid));
    header("Location: blog.php");
}
  }
} else {
  $getid = htmlspecialchars($_GET['id']);
  header("Location: article.php?id=".$getid);
}
?>
