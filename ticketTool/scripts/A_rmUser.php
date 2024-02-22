
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

include('../include/libBDD.php');
include('../include/connectDB.php');
include('../include/head.php');
if ($_SESSION['isLoggedIn']==true && $_SESSION['adminMode']==true) {
    $op = rmAccount($bdd,$_GET['idUser']);
    header('Location:../admin/accounts.php?success='.$op);
}
else {
    header('Location: ../menu.php');
}
?>