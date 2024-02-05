<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <?php
    $SESSION['isLoggedIn']=false;
    include('include/head.php');?>
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
    </form>
    <?php echo hash('sha256','P@ssw0rd');?>
  </div>
</body>

</html>