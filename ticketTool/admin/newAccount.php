<?php ini_set('display_errors', 'On');
error_reporting(E_ALL); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('../include/head.php'); ?>
    <link rel="stylesheet" href="../style/style.css" type="text/css">
    <link rel="stylesheet" href="../style/style-page.css" type="text/css">
    <link rel="stylesheet" href="../style/menu-style.css" type="text/css">
</head>

<body>
    <?php if (isset($_SESSION['isLoggedIn'])) {
        if ($_SESSION['adminMode'] == true) {
            include('navAdmin.php');
    ?><div class="container padt-2">
                <div class="row">
                    <div class="col-lg-11 box">
                        <h1>Nouvel Utilisateur</h1><br>
                        <form class="col-lg-12 container" method="POST" action="../scripts/A_newUser.php">
                            <div class="row">
                                <div class="col-lg-8">
                                    <label>Nom : </label>
                                    <input type="text" name="lastName">
                                    <label>Prénom : </label>
                                    <input type="text" name="firstName">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-lg-4"><label>Nom d'utilisateur : </label>
                                    <input type="text" name="username">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-lg-4"><label>Mot de passe : </label>
                                    <input type="password" name="password">
                                </div>
                            </div><br>
                            <button type="submit" class="menu-btn">Valider</button>
                        </form>
                        <div class="row padb-20">
                            <div class="col-lg-2">
                                <a href="accounts.php" class="padb-20"><button class="menu-btn">Retour</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php } else {
            header('Location: ../menu.php');
        }
    } else {
        header('Location: ../index.php');
    } ?>
</body>

</html>