<h2>Gestion des etudiants</h2>
<br>
<?php
$lesPromotions= $unControleur->selectAllPromotions();
    require_once("vue/vue_insert_etudiant.php");
    require_once("vue/vue_les_etudiants.php");
?>