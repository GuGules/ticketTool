<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("include/head.php");
    include("include/connectDB.php"); ?>
    <link rel="stylesheet" href="style/menu-style.css" type="text/css">
</head>

<body>
    <div class="container" id="menu">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" id="menu-barre">
                <img src="favicon.ico" class="img">
                <form method="POST" action="#"><button class="menu-btn" type="submit">Ouvrir un ticket</button></form> 
                <form method="POST" action="#"><button class="menu-btn" type="submit">Valider un ticket</button></form>  
                <form method="POST" action="#"><button class="menu-btn" type="submit">Consulter les tickets</button></form>  
                <?php if($_SESSION['adminMode']==1){
                    echo '<form method="POST" action="#"><button class="menu-btn" type="submit">Administration</button></form>';
                }?>
                <form method="POST" action="account_settings.php"><button class="menu-btn" type="submit">Paramètres de compte</button></form>  
                <form method="POST" action="script_disconnect.php"><button class="menu-btn" type="submit">Déconnexion</button></form>  
                <?php echo "<p class='feur'>Utilisateur Connecté : " . $_SESSION['ConnectedUser'] . "</p>"; ?>
            </div>
        </div>
    </div>
</body>

</html>