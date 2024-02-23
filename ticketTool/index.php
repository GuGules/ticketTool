<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
  $_SESSION['isLoggedIn'] = false;
  include('include/head.php'); ?>
  <link rel="stylesheet" href="style/style.css" type="text/css">
</head>

<body>
  <div class="container" id="container">
    <div class="row">
      <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" id="connectForm">
        <img id="img" src="favicon.ico">
        <form action="scripts/scriptConnect.php" method="POST">
          <h5>Connexion</h5>
          <?php if (isset($_GET['error'])) {
            if ($_GET['error'] == "i_log") {
              echo "<p>Nom d'utilisateur ou mot de passe incorrect</p>";
            } else if ($_GET['error'] == "emp_log") {
              echo "<p>Aucune informations d'identification entrées</p>";
            }
          } ?>
          <input type="text" autocomplete="off" name="username" class="c-input" placeholder="Nom d'utilisateur">
          <input type="password" autocomplete="off" name="password" class="c-input" placeholder="Mot de passe"><br>
          <button class="submit-btn" type="submit">Se Connecter</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>