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
    <?php
    if (isset($_SESSION['isLoggedIn'])) {
        if ($_SESSION['adminMode'] == true) {
            include('navAdmin.php');
            include('../include/libBDD.php');
            include('../include/connectDB.php');
    ?><div class="container padt-2">
                <div class="row">
                    <div class="col-lg-11 box padt-2">

                        <?php if (isset($_GET['success'])) {
                            if ($_GET['success'] == 1) {
                                echo '<div class="alert alert-success" role="alert">Opération réalisée avec succès</div>';
                            } else {
                                echo '<div class="alert alert-danger" role="alert">Problème avec l\'opération. Contactez l\'Administrateur</div>';
                            }
                        } ?>
                        <h1>Gestion des tickets</h1>
                        <div class="container tickets-box">
                            <table class="col-lg-12 table">
                                <thead>
                                    <td>ID</td>
                                    <td>Motif</td>
                                    <td>Auteur</td>
                                    <td>Date de publication</td>
                                    <td>Gravité</td>
                                    <td>Statut</td>
                                    <td>Actions</td>
                                </thead>
                                <?php
                                $tickets = getTickets($bdd);
                                foreach ($tickets as $unTicket) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $unTicket['id']; ?>
                                        </td>
                                        <td>
                                            <?php echo $unTicket['motif']; ?>
                                        </td>
                                        <td>
                                            <?php echo $unTicket['username']; ?>
                                        </td>
                                        <td>
                                            <?php echo $unTicket['datePublication']; ?>
                                        </td>
                                        <td>
                                            <?php echo $unTicket['cl']; ?>
                                        </td>
                                        <td>
                                            <?php echo $unTicket['cs']; ?>
                                        </td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <?php if ($unTicket['cs'] == "Non Validé") { ?>
                                                            <a href="../scripts/A_scriptCheckTicket.php?ticket=<?php echo $unTicket['id'] ?>" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Forcer la validation</a>
                                                        <?php } else { ?>
                                                            <a href="../scripts/A_scriptUnCheckTicket.php?ticket=<?php echo $unTicket['id'] ?>" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Annuler la validation</a>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        |
                                                    </td>
                                                    <td>
                                                    <a href="../scripts/A_scriptRmTicket.php?ticket=<?php echo $unTicket['id'] ?>" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Supprimer</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </table>
                        </div>
                        <a class="padb-20" href="../admin.php"><button class="menu-btn">Retour</button></a>
                    </div>
                </div>
        <?php
        } else {
            header('Location: ../menu.php');
        }
    } else {
        header('Location: ../index.php');
    }

        ?>
</body>

</html>