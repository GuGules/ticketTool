<?php ini_set('display_errors', 'On');
error_reporting(E_ALL); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('include/head.php');
    include('include/libBDD.php');
    include('include/connectDB.php'); ?>
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link rel="stylesheet" href="style/style-page.css" type="text/css">
    <link rel="stylesheet" href="style/menu-style.css" type="text/css">
</head>

<body>
 <?php if ($_SESSION['isLoggedIn'] == true) {?>
    <div class="container" id="imprimante">
        <div class="row">
            <div class="col-sm-12 col-md-11 col-lg-11 col-xl-11 box">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php 
                                if (isset($_GET['error'])){
                                    echo "Il manque des informations";
                                } else if (isset($_GET['status'])){
                                    echo "Le ticket a correctement été publié le ".date('d/m/Y')." à ".date("H:i:s");
                                }
                                
                                ?>
                            </div>
                        </div>
                        <form method="POST" action="scripts/scriptPostTicket.php">
                            <div class="row padb-20">
                                <div class="col-lg-1">
                                    <label>Motif : </label>
                                </div>
                                <div class="col-lg-4">
                                    <input autocomplete=off name="motif" class="col-lg-12 motifInput" type="text" maxlength="500" required>
                                </div>
                            </div>
                            <div class="row padb-20">
                                <div class="col-lg-1"><label>Gravité : </label></div>
                                <div class="col-lg-4"><select name="idGrav" required>
                                        <option value="">Choisissez une gravité</option>
                                        <?php
                                        $lesIdGrav = getNivGravite($bdd);
                                        foreach ($lesIdGrav as $unIdGrav) {
                                            $id = $unIdGrav['id'];
                                            $lib = $unIdGrav['libelle'];
                                            echo '<option value="' . $id . '">' . $lib . '</option>';
                                        } ?>
                                    </select></div>
                            </div>
                            <div class="row padb-20">
                                <button type="submit" class="menu-btn col-lg-2">Envoyer le ticket</button>
                            </div>
                        </form>
                        <form method="POST" action="menu.php"><button type="submit" class="menu-btn col-lg-2">Retour</button></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } else {
        header('Location: index.php');
    }?>
</body>

</html>