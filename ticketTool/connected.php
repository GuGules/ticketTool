<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include/head.php');?>
</head>
<body>
    <?php
        include("include/BDDAccess.php");
        echo "<h1>".$_SESSION['adminMode']."</h1>";
    ?>
</body>
</html>