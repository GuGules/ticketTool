<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/head.php');?>
    <link rel="stylesheet" href="style/style-page.css" type="text/css">
    <link rel="stylesheet" href="style/menu-style.css" type="text/css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-xl-11 box">
                <div class="col-lg-3 col-xl-3">
                <form method="GET" action="scripts/changePassword.php">
                    <label>Mot de passe actuel : </label>
                    <input type="password" name="actual_password"></input>
                    <label>Nouveau mot de passe : </label>
                    <input type="password" name="new_password"></input>
                    <label>Confirmer le mot de passe : </label>
                    <input type="password" name="confirmed_password"></input>
                    <button class="menu-btn" type="submit">Valider</button>
                </form>
                <a href="menu.php"><button class="menu-btn">Retour</button></a>
</div>
            </div>
        </div>
    </div>
</body>
</html>