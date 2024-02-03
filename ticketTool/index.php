<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" href="style.css" type="text/css">
  <title>ticketTool</title>
  <?php
  include("include/connectDB.php");
  include("classes/user.php");
  $user = new User();
  ?>
</head>

<body>
  <div class="connectForm">
    <form action="include/connect.php" method="get">
      <table>
        <thead>Connexion</thead>
        <tr>
          <td><label> Nom d'Utilisateur : </label></td>
          <td><input name="username" id="username" type="text" /></td>
        </tr>
        <tr>
          <td><label> Mot de passe : </label></td>
          <td><input name="password" id="password" type="password" /></td>
        </tr>
        <tr><td><button type="submit">Se Connecter</button></td></tr>
      </table>
      
      
    </form>
  </div>
</body>

</html>