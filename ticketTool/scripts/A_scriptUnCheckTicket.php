<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
    include('../include/libBDD.php');
    include('../include/head.php');
    include('../include/connectDB.php');
    if ($_SESSION['isLoggedIn'] == true && $_SESSION['adminMode']==true) {
        $state = uncheckTicket($bdd,$_GET['ticket']);
        header('Location: ../admin/tickets.php?success='.$state);
    } else {
        header('Location : ../index.php');
    }
?>