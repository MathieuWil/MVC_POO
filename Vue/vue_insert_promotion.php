<h3>Ajout d'une promotion</h3>
<br>
<form action="#" method="post">
    Désignation de la promotion <br>
    <input type="text" name="designation" 
    value="<?= ($laPromotion != null)? $laPromotion['designation'] : '' ?>"> <br>
    Salle de cours <br>
    <input type="text" name="salle"
    value="<?= ($laPromotion != null)? $laPromotion['salle'] : '' ?>"> <br>
    Diplome préparé <br>
    <input type="text" name="diplome"
    value="<?= ($laPromotion != null)? $laPromotion['diplome'] : '' ?>"> <br>
    <input type="reset" name="Annuler" value="Annuler"> <br>
    <input type="submit" 
    <?= ($laPromotion != null) ? 'name="Modifier" value="Modifier"' :'name="Valider" value="Valider"' ?> >
    <?= ($laPromotion != null) ? '<input type="hidden" name="idpromotion" value="'.$laPromotion['idpromotion'].'">':'' ?>
</form>