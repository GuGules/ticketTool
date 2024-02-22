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
                <div class="padb-20 col-lg-12 box top-25">
                    <?php if (isset($_GET['status'])){
                        if ($_GET['status']=="success"){
                            echo "<h6>Le ticket a correctement été validé</h6>";
                        } else if ($_GET['status']=="failed"){
                            echo "<h6>Il y a eu un problème avec la validation, contactez l'administrateur ticketTool</h6>";
                        }
                    } ?>
                    <h1>Infos sur le ticket n° <?php echo $_GET['ticket'] ;?></h1>
                    <table class="table">
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
                                Valider le ticket
                            </td>
                        </tr>
                    
                    <?php $infosTicket = getInfosTicket($bdd,$_GET['ticket']);?>
                    <tr>
                        <td>
                            <?php echo $infosTicket['prenom']." ".$infosTicket['nom']." alias ".$infosTicket['username']?>
                        </td>
                        <td>
                            <?php echo date('d/m/Y',strtotime($infosTicket['datePublication']))?>
                        </td>
                        <td>
                            <?php echo $infosTicket['motif'] ?>
                        </td>
                        <td>
                            <?php echo $infosTicket['cl'] ?>
                        </td>
                        <td>
                            <a href="scripts/scriptCheckTicket.php?ticket=<?php echo $_GET['ticket']?>"><button class="menu-btn">✅</button></a>
                        </td>
                    </tr>
                    
                    
                    

                    </table>
                    <a href="OKTicket.php"><button class="menu-btn">Retour</button></a>
                </div>
            </div>
        </div>
    <?php } else {
        header('Location: index.php');
    } ?>
</body>

</html>