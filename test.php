<?php   require_once('require/config.php'); ?>

<?php
if(isset($_POST['connectform'])) {
  $mailconnect = htmlspecialchars($_POST['mailconnect']);
  $mdpconnect = htmlspecialchars($_POST['mdpconnect']);
  if(!empty($mailconnect) AND !empty($mdpconnect)) {
    $requser = $bdd->prepare("SELECT * FROM users WHERE mail = ? AND password = ?");
    $requser->execute(array($mailconnect, $mdpconnect));
    $userexist = $requser->rowCount();
    $user = $requser->fetch();
    if ($userexist > 0 && password_verify($mdpconnect, $user['password'])) {

          $_SESSION['id'] = $user['id'];
          $_SESSION['pseudo'] = $user['pseudo'];
          $_SESSION['mail'] = $user['mail'];
          header("Location: profile.php?id=".$_SESSION['id']);
          exit;
    }
    else
    {
      $erreur = "<p class='trouge mt-10'>Mauvaise adresse e-mail ou mot de passe</p>";
    }
  }
  else {
 $erreur = '<p class="trouge mt-10"> Tous les champs doivent être complétés !</p>';
  }
}


?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <title>Inscription - Espace membre</title>
</head>
<body class="positionsite">


  <main class="main">


    <div class="blocsite">
      <div class="contentsite">
        <h1 class="pt-20">Connexion</h1>
        <?php
          if(isset($_SESSION['id'])) {
            if($_SESSION['id'] > 0) {
              header("Location: profile.php?id=".$_SESSION['id']);
            }

          }
          ?>
        <div class="row">
          <div class="col-6">
            <nav>
              <ul class="contentnav mt-50 mb-30">
              <li class="blocnav" style="background: #cacaca;"><a href="login.php">Connexion</a></li>
                <li class="blocnav"><a href="register.php">S'inscire</a></li>
                <li class="blocnav"><a href="mdp-oublie.php">Mot de passe oublié</a></li>
              </ul>
            </nav>
          </div>

            <div class="col-md-7 mt-20">
              <form  method="POST">
              <input type="email"  placeholder="E-mail" class="inputregister" value="<?php if (isset($mailconnect)) {
                echo $mailconnect;
              } ?>" name="mailconnect"><br>
                <input type="password"  placeholder="Mot de passe" class="inputregister mt-10" value="" name="mdpconnect">
                <input type="submit" class="btnblanc mt-25"  value="Se connecter" name="connectform">
                      </form>
            </div>
                  <div class="col-12">
                    <?php if(isset($erreur)){
                    echo  $erreur ;
                            } ?>
                  </div>

      </div>
    </div>

  </main>

</body>

</html>
