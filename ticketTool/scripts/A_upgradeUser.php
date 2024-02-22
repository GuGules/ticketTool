<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
include('../include/connectDB.php');
include('../include/libBDD.php');
include('../include/head.php');

if (isset($_SESSION['isLoggedIn']) and $_SESSION['adminMode']==true){
    $op = upgradeUser($bdd,$_GET['idUser']);
    header('Location: ../admin/accounts.php?success='.$op);
}
else{
    header('Location: ../menu.php');
}
?>