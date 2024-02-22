<?php ini_set('display_errors', 'On');
error_reporting(E_ALL); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('../include/head.php');
    include('../include/connectDB.php');
    include('../include/libBDD.php'); ?>
    <link rel="stylesheet" href="../style/style.css" type="text/css">
    <link rel="stylesheet" href="../style/style-page.css" type="text/css">
    <link rel="stylesheet" href="../style/menu-style.css" type="text/css">
</head>

<body>
    <?php include('navAdmin.php');
    if ($_SESSION['isLoggedIn'] == true) {
        if ($_SESSION['adminMode'] == true) {
            $profileData = getInfosUser($bdd, $_GET['idUser']); ?>
            <div class="container padt-2">
                <div class="row">
                    <div class="col-lg-10 box">
                        <h1>Gestion des informations de l'utilisateur : <?php echo $profileData['username'] ?></h1>
                        <?php if (isset($_GET['error']) && $_GET['error']=="pw"){
                            echo '<div class="alert alert-danger" role="alert">Les mots de passe ne correspondent pas.</div>';
                        }
                        ?>
                        <form method="POST" class="container" action="../scripts/A_changePasswd.php">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label>Id :</label>
                                    <input name="mid" type="text" value=" <?php echo $profileData['id'] ?> " disabled><br />
                                    <input name="id" type="text" value=" <?php echo $profileData['id'] ?> " style="visibility: hidden";>
                                </div>
                                <div class="col-lg-4">
                                    <label>Nom d'utilisateur :</label>
                                    <input name="username" type="text" value=" <?php echo $profileData['username'] ?> "><br />
                                </div></div><br>
                                <div class="row">
                                <div class="col-lg-4">
                                    <label>Nom :</label>
                                    <input name="lastName" type="text" value=" <?php echo $profileData['nom'] ?> " disabled><br />
                                </div>
                                <div class="col-lg-4">
                                    <label>Prénom :</label>
                                    <input name="firstName" type="text" value=" <?php echo $profileData['prenom'] ?> " disabled><br />
                                </div>
                                
                            </div><br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label>Mot de passe : </label>
                                    <input name="password" type="password"><br />
                                </div>
                                <div class="col-lg-6">
                                    <label>Confirmer le mot de passe : </label>
                                    <input name="c_password" type="password"><br />
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-lg-1">
                                    <button class="menu-btn" type="submit">Valider</button>
                                </div>

                            </div>
                        </form>
                        <div class="col-lg-1 padb-20">
                            <a href="accounts.php"><button class="menu-btn">Retour</button></a>
                        </div>
                    </div>
                </div>
            </div>

    <?php } else {
            header('Location: ../menu.php');
        }
    } else {
        header('Location: ../index.php');
    }






    ?>
</body>

</html>