<?php
    $users = getUsers($bdd);
?>
<table>
    <thead>Liste des utilisateurs</thead>
    <tr>
        <td>Nom</td>
        <td>Prenom</td>
    <?php
    foreach ($users as $user){
        $nom = $user['nom'];
        $prenom = $user['prenom'];
    ?>
    <tr>
        <td><?php echo $nom;?></td>
        <td><?php echo $prenom;?></td>
    </tr>
    <?php
    }
    ?>