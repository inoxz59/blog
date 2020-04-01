<?php
// if(isset($_SESSION['id'])) {
//   if($_SESSION['id'] > 0) {

if (isset($_POST['article'])) {
  if(isset($_POST['title'],$_POST['img'],$_POST['content'])) {
    $title = htmlspecialchars($_POST['title']);
    $img = htmlspecialchars($_POST['img']);
    $content = htmlspecialchars($_POST['content']);
  if (!empty($title) AND !empty($img) AND !empty($content)) {
    $ins = $bdd->prepare('INSERT INTO articles(title, content, date, img) VALUES (?,?,NOW(),?)');
    $ins->execute(array($title,$content,NOW(),$img));

}

}
}

?>

 <!-- $_POST['title'] = $title;
 $_POST['img'] = $img;
 $_POST['content'] = $content;

$title = mysql_real_escape_string($title);
$img = mysql_real_escape_string(nl2br($img));
$content = mysql_real_escape_string(nl2br($content));

try
{
$sql = mysql_query("INSERT INTO blog (title, img, content) VALUES ('".$title."','".$img."','".$content."');

if (!$sql) {
throw new Exception( mysql_error() );
}
else
header('location: show.php?id='.mysql_insert_id());

mysql_close();
}
catch (Exception $e) { die( $e->getMessage() ); }
}


$req = $bdd->prepare("INSERT INTO articles(title, img, content)  VALUES(?, ?, ?)");
 $req->execute(array($_POST['title'],$_POST['img'], $_POST['content']));
 header("Location: article.php");
} -->
