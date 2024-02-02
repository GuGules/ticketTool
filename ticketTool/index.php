<?php
  ini_set('display_errors', 'On');
  error_reporting(E_ALL);
  include ('include/BDDAccess.php')
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico">
    <title>Document</title>
</head>
<body>
    <?php
    seConnecter();
    ?>
</body>
</html>