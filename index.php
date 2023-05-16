<?php
    require_once("controlleur/controlleur.class.php");
    $unControleur=new Controleur();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scolarité cfa</title>
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>
    <h1>Gestion de la scolarité du CFA</h1>    
    <br>
    <a href="index.php?page=0"><img src="images/logo.png" height="60" width="60"></a>
    <a href="index.php?page=1"><img src="images/promotions.png" height="60" width="60"></a>
    <a href="index.php?page=2"><img src="images/etudiants.png" height="60" width="60"></a>
    <a href="index.php?page=3"><img src="images/professeurs.png" height="60" width="60"></a>
    <a href="index.php?page=4"><img src="images/enseignements.png" height="60" width="60"></a>
    <?php
    if (isset($_GET['page'])) {
        $page=$_GET['page'];
    }else {
        $page=0;
    }
    switch ($page) {
        case '0': require_once("home.php"); break;
        case '1': require_once("promotions.php"); break;
        case '2': require_once("etudiants.php"); break;
        case '3': require_once("professeurs.php"); break;
        case '4': require_once("enseignements.php"); break;
        default : require_once("vue/vue_erreur.php"); break;
    }
    ?>
</body>
</html>
