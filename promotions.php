<h2>Gestion des promotions</h2>
<br>
<?php
    $laPromotion=null;

    if (isset($_GET['action']) && isset($_GET['idPromotion'])) {
    $action=$_GET['action'];
    $idPromotion = $_GET['idPromotion'];
    switch ($action) {
        case 'sup': $unControleur->deletePromotion($idPromotion);
            break;
        case 'edit':
            $laPromotion=$unControleur->selectWherePromotion($idPromotion);
            break;
    }
    }
    require_once("vue/vue_insert_promotion.php");

    if (isset($_POST['Modifier'])) {
        $unControleur->updatePromotion($_POST);
        echo "<br>Modification réussie de la promotion<br>";
    }

    if (isset($_POST['Valider'])) {
        $unControleur->insertPromotion($_POST);
        echo "<br>Insertion réussie de la promotion<br>";
    }

    if (isset($_POST['Filtrer'])){
        $mot=$_POST['mot'];
        $lesPromotions=$unControleur->selectLikePromotions($mot);
            } else {
    $lesPromotions=$unControleur->selectAllPromotions();
}
    require_once("vue/vue_les_promotions.php");

        
?>