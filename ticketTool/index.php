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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <?php
  include("include/connectDB.php");
  ?>
</head>

<body>
  <div class="connectForm">
    <form action="connect.php" method="GET">
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
        <tr>
          <td><button type="submit">Se Connecter</button></td>
        </tr>
      </table>
      
      <?php echo hash('sha256','P@ssw0rd');?>
    </form>
  </div>
</body>

</html>