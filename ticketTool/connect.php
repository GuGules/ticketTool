<?php
include('include/BDDAccess.php');
    if ($user->Login($bdd,$_GET['username'],$_GET['password'])){
        ?><script>alert('Connexion réussie');</script><?php
        header('Location: /');
        die();
    } else {
    ?><script>alerrt("Connexion Echouée");<?php
    }
?>