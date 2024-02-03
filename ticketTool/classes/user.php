<?php
class User{
    public $connectedUser ="";
    public $isLoggedIn = false;
    public function __construct(){

    }

    function Login($bdd,$user,$passwd){
        $req = "select SHA_PASS from utilisateur where username = $user";
        $res = $bdd->query($req);
        $connectToken = $res->fetch();
        if (hash('sha256',$passwd)==$connectToken['SHA-PASS'])
     {
        $this->isLoggedIn = true;
        $connectedUser = $user;
        echo "Connecté";
     }
     }

}