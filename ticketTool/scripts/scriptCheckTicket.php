<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
    include('../include/libBDD.php');
    include('../include/head.php');
    include('../include/connectDB.php');
    if ($_SESSION['isLoggedIn'] == true ) {
        $state = checkTicket($bdd,$_GET['ticket']);
        header('Location: ../OKTicket.php?status='.$state);
    }
?>