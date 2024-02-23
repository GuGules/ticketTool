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
    <?php if ($_SESSION['isLoggedIn'] == true) { ?>
        <div class="container-fluid col-lg-11 " id="imprimante">
            <div class="row">
                <div class="padb-20 col-lg-12 box">
                    <h1>Tous les tickets</h1>
                    <table class=" table max-table-80">
                        <tr>
                            <td>
                                Auteur
                            </td>
                            <td>
                                Date de publication
                            </td>
                            <td>
                                Motif
                            </td>
                            <td>
                                Gravité
                            </td>
                            <td>
                                Statut
                            </td>
                        </tr>
                        <?php
                        $tickets = getTickets($bdd);
                        foreach ($tickets as $ticket) { ?>
                            <tr>
                                <td><?php echo $ticket['username']; ?></td>
                                <td><?php echo $ticket['datePublication']; ?></td>
                                <td><?php echo $ticket['motif']; ?></td>
                                <td><?php echo $ticket['cl']; ?></td>
                                <td><?php echo $ticket['cs']; ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                    <a href="menu.php"><button class="menu-btn">Retour</button></a>
                </div>
            </div>
        </div>
    <?php } else {
        header('Location: index.php');
    } ?>
</body>

</html>