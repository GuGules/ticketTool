<?php
function getNivGravite($bdd){
    $req='SELECT * from couleur where id=1 or id=2;';
    $res= $bdd->query($req);
    $lesLignes = $res->fetchAll();
    return $lesLignes;
}

function sendTicket($bdd,$motif,$couleur,$user){
    $requete = 'insert into tickets(motif,datePublication,couleur,status,idUser,heurePublication) values ("'.$motif.'","'.date('Y-m-d').'",'.$couleur.',2,'.$user.',"'.date("H:i:s").'")';
    $bdd->exec($requete);
}

function getTickets($bdd){
    $requete = "select tickets.id, motif, couleur.libelle as cl, datePublication, colorStatus.status as cs, username from tickets join couleur on tickets.couleur=couleur.id join utilisateur on tickets.idUser = utilisateur.id join colorStatus on tickets.status = colorStatus.id order by datePublication desc,heurePublication desc";
    $res = $bdd->query($requete);
    $lesLignes = $res->fetchAll();
    return $lesLignes;
} 

function getTicketAValider($bdd,$user){
    $requete = 'select tickets.id,motif, couleur.libelle as cl, datePublication, colorStatus.status as cs, username from tickets join couleur on tickets.couleur=couleur.id join utilisateur on tickets.idUser = utilisateur.id join colorStatus on tickets.status = colorStatus.id where tickets.status="2" and idUser != '.$user.' order by datePublication and heurePublication;';
    $res=$bdd->query($requete);
    $lesLignes = $res-> fetchAll();
    return $lesLignes;
}

function getInfosTicket($bdd,$idTicket){
    $requete = 'select tickets.id,nom,prenom,username,motif,couleur.libelle as cl, datePublication, colorStatus.status as cs from tickets join couleur on tickets.couleur=couleur.id join utilisateur on tickets.idUser = utilisateur.id join colorStatus on tickets.status = colorStatus.id where tickets.id = '.$idTicket.' order by datePublication and heurePublication';
    $res =$bdd->query($requete) ;
    $lesLignes = $res->fetch();
    return $lesLignes;
}

function checkTicket($bdd,$idTicket){
    $requete = 'update tickets set status = 1 where id= '.$idTicket;
    $res = $bdd->exec($requete);
    return $res;
}

function uncheckTicket($bdd,$idTicket){
    $requete = 'update tickets set status = 2 where id= '.$idTicket;
    $res = $bdd->exec($requete);
    return $res;
}

function getLastTickets($bdd){
    $requete = "select motif, couleur.libelle as cl, datePublication, colorStatus.status as cs, username from tickets join couleur on tickets.couleur=couleur.id join utilisateur on tickets.idUser = utilisateur.id join colorStatus on tickets.status = colorStatus.id order by datePublication desc,heurePublication desc limit 15";
    $res = $bdd->query($requete);
    $lesLignes = $res->fetchAll();
    return $lesLignes;
}

function getUsername($bdd,$id){
    $res = $bdd->query('select username from utilisateur where id='.$id);
    var_dump($res);
    $rep = $res->fetch();
    return $rep['username'];
}

function changeUsername($bdd,$newUsername,$id){
    $req = 'update utilisateur set username = "'.$newUsername.'" where id ='.$id;
    return $bdd->exec($req);
}


function upgradeUser($bdd,$idUser){
    $req = 'update utilisateur set adminMode = 1 where id='.$idUser;
    return $bdd->exec($req);    
}

function downgradeUser($bdd,$idUser){
    $req = 'update  utilisateur set adminMode = 0 where id='.$idUser;
    return $bdd->exec($req);
}

function rmAccount($bdd, $idUser){
    $req = 'delete from utilisateur where id='.$idUser;
    return $bdd->exec($req);
}

function getInfosUser($bdd,$idUser){
    $req = 'select * from utilisateur where id ='.$idUser;
    $res = $bdd->query($req);
    $ligne = $res->fetch();
    return $ligne;
}

function checkUsernameDisp($bdd,$username){
    $req = 'Select username from utilisateur';
    $res = $bdd->query($req);
    $lignes = $res->fetchAll();
    $disp = true;
    foreach ($lignes as $uneLigne){
        if ($username == $uneLigne['username']){
            $disp = false;
        }
    }
    return $disp;
}

function rmTicket($bdd,$idTicket){
    return $bdd->exec('Delete from tickets where id ='.$idTicket);
}

function addUser($bdd,$nom,$prenom,$password,$username){
    $req = 'insert into utilisateur(nom,prenom,SHA_PASS,username,adminMode)values ("'.$nom.'","'.$prenom.'","'.hash('sha256',$password).'","'.$username.'",0)';
    return $bdd->exec($req);
}

?>