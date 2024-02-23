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
        <div class="container-fluid col-lg-11 max-table-80" id="imprimante">
            <div class="row">
                <div class="padb-20 col-lg-12 box">
                    <?php if (isset($_GET['status'])){
                        if ($_GET['status']==1){
                            echo "<h6>Le ticket a correctement été validé.</h6>"; 
                        } elseif ($_GET['status']==0){
                            echo "<h6>il y a un problème avec la validation du ticket. Contactez votre administrateur ticketTool.</h6>"; 
                        }
                    }?>
                    <h1>Tous les tickets</h1>
                    <table class=" table ">
                        <tr>
                            <td>
                                Consulter
                            </td>
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
                        $tickets = getTicketAValider($bdd,$_SESSION['userId']);
                        foreach ($tickets as $ticket) { ?>
                            <tr>
                                <td class="col-lg-1"><a href="ticket.php?ticket=<?php echo $ticket['id']?>"><img class="col-lg-2 btn-tick" src="document.png"></a></td>
                                <td><?php echo $ticket['username']; ?></td>
                                <td><?php echo $ticket['datePublication']; ?></td>
                                <td><?php echo $ticket['motif']; ?></td>
                                <td><?php echo $ticket['cl']; ?></td>
                                <td><?php echo $ticket['cs']; ?></td>
                            </tr></a>
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