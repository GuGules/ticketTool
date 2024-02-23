<?php
include('../include/head.php');
include('../include/libBDD.php');
include('../include/connectDB.php');
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    if ($_SESSION['isLoggedIn'] == true) {
        $motif = $_POST['motif'];
        $gravId = $_POST['idGrav'];
        $user = $_SESSION['userId'];
        if (!(isset($motif)) or !(isset($gravId))){
            header('Location: ../newTicket.php?error=missingField');
        } else {
            sendTicket($bdd,$motif,$gravId,$user);
            header( 'Location: ../newTicket.php?status=success' ); 
        }
    }