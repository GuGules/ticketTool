<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("include/head.php");
    include("include/connectDB.php"); ?>
    <link rel="stylesheet" href="menu-style.css" type="text/css">
</head>

<body>
    <div class="container" id="menu-barre">
        <div class="row">
            <div class="col-lg-2 col-xl-2">
                <button class="menu-btn" role="button">Ajouter un ticket</button>
            </div>
            <div class="col-lg-2 col-xl-2">
                <button class="menu-btn" role="button">Valider un ticket</button>
            </div>
            <div class="col-lg-2 col-xl-2">
                <button class="menu-btn" role="button">Consulter les tickets</button>
            </div>
            <div class="col-lg-2 col-xl-2">
                <button class="menu-btn" role="button">Déconnexion</button>
            </div>
            <div class="col-lg-3 col-xl-3"><?php echo "<p>Utilisateur Connecté : ".$_SESSION['ConnectedUser']."</p>";?></div>
        </div>
    </div>
</body>

</html>