<?php ini_set('display_errors', 'On');
error_reporting(E_ALL); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <?php include('include/head.php'); ?>
  <?php include('include/connectDB.php'); ?>
  <?php include('include/libBDD.php'); ?>
  <link rel="stylesheet" href="style/style.css" type="text/css">
  <link rel="stylesheet" href="style/style-page.css" type="text/css">
  <link rel="stylesheet" href="style/menu-style.css" type="text/css">
</head>

<body>
  <?php if ($_SESSION['isLoggedIn'] == true) {
    if ($_SESSION['adminMode'] == true) { ?>
      <?php include('admin/nav.php');?>
      <div class="container padt-2">
        <div class="row">
          <div class="col-lg-4 offset-lg-1 box adminMenu">
            <h1>Utilisateurs</h1>
            <?php
            $users = getUsers($bdd);
            ?>
            <table class="table">
              <tr>
                <td>Nom</td>
                <td>Prenom</td>
                <?php
                foreach ($users as $user) {
                  $nom = $user['nom'];
                  $prenom = $user['prenom'];
                  $adminMode = $user['adminMode'];
                ?>
              <tr>
                <td><?php echo $nom; ?></td>
                <td><?php echo $prenom; ?></td>
              </tr>

            <?php
                }
            ?>
            </table>
          </div>
          <div class="col-lg-4 offset-lg-1 box adminMenu">
            <h1>Derniers Tickets</h1>
            <?php $ticket = getLastTickets($bdd); ?>
            <table class="table">
              <tr>
                <td>
                  Motif
                </td>
                <td>
                  Gravité
                </td>
                <td>
                  Statut
                </td>
              </tr>
              <?php foreach($ticket as $unTicket){
                ?><tr>
                  <td><?php echo $unTicket['motif']; ?></td>
                  <td><?php echo $unTicket['cl']; ?></td>
                  <td><?php echo $unTicket['cs']; ?></td>
                </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
  <?php } else {
      header('Location: menu.php');
    }
  } else {
    header("Location:index.php");
  } ?>
</body>

</html>