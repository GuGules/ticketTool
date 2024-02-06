<?php

/* function isAdmin($bdd,$user){
    $req = "select adminMode from utilisateur where username=".$user."";
    $res = $bdd->query($req);
    $lesLignes = $res->fetch();
    if ($lesLignes['adminMode']){
       return true;
    } else {
       return false;
    }
} */

function Login($bdd, $user, $passwd)
{
    $req = "select SHA_PASS from utilisateur where username ='" . $user . "'";
    //$req = "select username from utilisateur where username ='".$user."'";
    //var_dump($req);
    $res = $bdd->query($req);
    $connectToken = $res->fetch();
    //var_dump($connectToken[0]);
    //echo 'testLogin  avec mot de passe entré : ' . hash('sha256', $passwd) . ' et mot de passe stocké' . $connectToken["SHA_PASS"];
    if (hash('sha256', $passwd) == $connectToken["SHA_PASS"]) {

        $_SESSION['isLoggedIn'] = true;
        $_SESSION['ConnectedUser'] = $user;
        //$_SESSION['adminMode']= isAdmin($bdd,$user);
        return true;
    } else {
        return false;
    }
}
