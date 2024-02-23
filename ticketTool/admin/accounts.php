<?php ini_set('display_errors', 'On');
error_reporting(E_ALL); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('../include/head.php');
    include('../include/connectDB.php'); ?>

    <link rel="stylesheet" href="../style/style.css" type="text/css">
    <link rel="stylesheet" href="../style/style-page.css" type="text/css">
    <link rel="stylesheet" href="../style/menu-style.css" type="text/css">
</head>

<body>
    <?php include('navAdmin.php');
    if ($_SESSION['isLoggedIn'] == true) {
        if ($_SESSION['adminMode'] == true) { ?>

            <div class="container padt-2">
                <div class="row">
                    <div class="col-lg-10 box">
                        <h1>Gestion des utilisateurs</h1>
                        <div class="container">
                            <div class="row">
                                <?php
                                if (isset($_GET['success'])) {
                                    if ($_GET['success'] == 1) {
                                        echo "<h6>L'opération a correctement été exécuté</h6>";
                                    } else {
                                        echo "<h6>L'opération a échouée, contactez l'administrateur ticketTool.</h6>";
                                    }
                                }
                                ?>
                            </div>
                            <div class="row">
                                <a class="col-lg-3" href="newAccount.php"><button class="menu-btn">
                                        Ajouter un utilisateur
                                    </button></a>
                            </div>
                            <div class="row">
                                <table class="table col-lg-10">
                                    <tr>
                                        <td>Nom</td>
                                        <td>Identifiant</td>
                                        <td>Privilèges Administrateur</td>
                                        <td>Actions</td>
                                    </tr>
                                    <?php
                                    $users = getUsers($bdd);
                                    foreach ($users as $unUser) {
                                        if ($_SESSION['ConnectedUser'] !== $unUser['username'] && $unUser['username'] !== "admin") {
                                    ?><tr>
                                                <td>
                                                    <?php echo $unUser['nom'] . " " . $unUser['prenom']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $unUser['username']; ?>
                                                </td>
                                                <td>
                                                    <?php if ($unUser['adminMode'] == true) {
                                                        echo "✅";
                                                    } else {
                                                        echo "❌";
                                                    } ?>
                                                </td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td><?php echo '<a href="editProfile.php?idUser=' . $unUser['id'] . '" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Modifier Identifiants</a></td>'; ?>
                                                            <td> | </td>
                                                            <td><?php if ($unUser['adminMode'] == true) {
                                                                    echo '<a href="../scripts/A_downgradeUser.php?idUser=' . $unUser['id'] . '" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Retrograder Privilèges</a>';
                                                                } else {
                                                                    echo '<a href="../scripts/A_upgradeUser.php?idUser=' . $unUser['id'] . '" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Elever Privilèges</a>';
                                                                } ?></td>
                                                            <td> | </td>
                                                            <td><a href="../scripts/A_rmUser.php?idUser=<?php echo $unUser['id'] ?>" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Supprimer Compte</a></td>
                                                            <!--<form method='POST' action='index.php'>-->
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                    <?php }
                                    } ?>
                                </table>
                                <a href="../admin.php" class="col-lg-3 padb-20"><button class="menu-btn">Retour</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div><?php } else {
                    header('Location : ../menu.php');
                }
            } else {
                header('Location: ../index.html');
            } ?>
</body>

</html>