<?php
function Login($bdd, $user, $passwd)
{
    $req = "select SHA_PASS from utilisateur where username ='" . $user . "'";
    //$req = "select username from utilisateur where username ='".$user."'";
    var_dump($req);
    $res = $bdd->query($req);
    $connectToken = $res->fetch();
    var_dump($connectToken[0]);
    echo 'testLogin  avec mot de passe entré : ' . hash('sha256', $passwd) . ' et mot de passe stocké' . $connectToken["SHA_PASS"];
    if (hash('sha256', $passwd) == $connectToken["SHA_PASS"]) {

        $_SESSION['isLoggedIn'] = true;
        $_SESSION['ConnectedUser'] = $user;
    }
    return $_SESSION['isLoggedIn'];
}
