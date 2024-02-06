<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("include/head.php");
    include("include/connectDB.php"); ?>
    <link rel="stylesheet" href="menu-style.css" type="text/css">
</head>

<body>
    <div class="container" id="menu">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" id="menu-barre">
                <form method="POST" action="#"><button class="menu-btn" type="submit">Ouvrir un ticket</button></form> 
                <form method="POST" action="#"><button class="menu-btn" type="submit">Valider un ticket</button></form>  
                <form method="POST" action="#"><button class="menu-btn" type="submit">Consulter les tickets</button></form>  
                <form method="POST" action="disconnect.php"><button class="menu-btn" type="submit">Déconnexion</button></form>  
                <div class="col-lg-3 col-xl-3"><?php echo "<p>Utilisateur Connecté : " . $_SESSION['ConnectedUser'] . "</p>"; ?></div>
            </div>
        </div>
    </div>
</body>

</html>