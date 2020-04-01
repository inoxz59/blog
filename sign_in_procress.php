<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données


    $username = mysqli_real_escape_string($bdd,htmlspecialchars($_POST['username']));
    $password = mysqli_real_escape_string($bdd,htmlspecialchars($_POST['password']));

    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM users where
              username = '".$username."' and password = '".$password."' ";
        $exec_requete = mysqli_query($bdd,$requete);

        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0)
        {
          $requete2 = "SELECT * FROM users";
          $exec_requete2 = mysqli_query($bdd,$requete2);
           $_SESSION['username'] = $username;
           $_SESSION['id'] = $id;
           $_SESSION['mail'];
           header('Location: index.php?id='.$_SESSION['id']);
        }
        else
        {
           header('Location: sign_in.php?erreur=1');
        }
    }
    else
    {
       header('Location: sign_in.php?erreur=2');
    }
}
else
{
   header('Location: sign_in.php');
}
mysqli_close($bdd);
?>
