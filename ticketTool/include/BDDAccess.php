<?php

$connectedUser = "";

function seConnecter()
{
   $serveur = 'mysql:host=localhost;port=3307';
   $bdd = 'dbname=BDDTickets';
   $user = 'ticketTool';
   $mdp = 'P@ssw0rd';
   try {
      $pdo = new PDO($serveur . ';' . $bdd . ';charset=UTF8', $user, $mdp);
   } catch (PDOException $e) {
      echo ('Erreur : ' . $e->getMessage());
   }
   return $pdo;
};

function getUsers($bdd){
   $req = "select nom,prenom from utilisateur";
   $res = $bdd->query($req);
   $lesLignes = $res->fetchAll();
   return $lesLignes;

}

