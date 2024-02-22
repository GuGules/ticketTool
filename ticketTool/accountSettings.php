<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('include/head.php'); ?>
    <link rel="stylesheet" href="style/style-page.css" type="text/css">
    <link rel="stylesheet" href="style/menu-style.css" type="text/css">

</head>

<body>
<?php if($_SESSION['isLoggedIn']==true){?>
    <div class="container" id="imprimante">
        <div class="row">
            <div class="col-sm-12 col-md-11 col-lg-11 col-xl-11 box">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 padb-20">
                    <form method="POST" action="scripts/scriptChangePassword.php">
                        <label>Mot de passe actuel : </label>
                        <input autocomplete="off" type="password" name="actual_password"></input>
                        <label>Nouveau mot de passe : </label>
                        <input autocomplete="off" type="password" name="new_password"></input>
                        <label>Confirmer le mot de passe : </label>
                        <input autocomplete="off" type="password" name="confirmed_password"></input>
                        <button class="menu-btn" type="submit">Valider</button>
                    </form>
                    <a href="menu.php"><button class="menu-btn">Retour</button></a>
                </div>
            </div>
        </div>
    </div>
    <?php } else {
        header('Location: index.php');
    }?>
</body>

</html>