<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL); 
include('../include/connectDB.php');
include('../include/libBDD.php');
include('../include/head.php');
if (isset($_SESSION['isLoggedIn']) and $_SESSION['adminMode']==true){
if (checkUsernameDisp($bdd,$_POST['username'])){
    $op = addUser($bdd,$_POST['lastName'],$_POST['firstName'],$_POST['password'],$_POST['username']);
    header('Location: ../admin/accounts.php?success='.$op);
}else{
    header('Location: ../admin/newAccount.php?error=taken');
}}else {header("Location:../index.php");}?>
?>