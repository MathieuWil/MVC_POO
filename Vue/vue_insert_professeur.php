<h3>Ajout d'un professeur</h3>
<br>
<form action="#" method="post">
    Nom professeur <br>
    <input type="text" name="nom"
    value="<?= ($leProfesseur != null)? $leProfesseur['nom'] : '' ?>"> <br>
    Prenom professeur <br>
    <input type="text" name="prenom"
    value="<?= ($leProfesseur != null)? $leProfesseur['prenom'] : '' ?>"> <br>
    Email professeur <br>
    <input type="text" name="email"
    value="<?= ($leProfesseur != null)? $leProfesseur['email'] : '' ?>"> <br>
    Mdp professeur <br>
    <input type="password" name="mdp"
    value="<?= ($leProfesseur != null)? $leProfesseur['mdp'] : '' ?>"> <br>
    Diplome professeur <br>
    <input type="text" name="diplome"
    value="<?= ($leProfesseur != null)? $leProfesseur['diplome'] : '' ?>"> <br>

    <input type="reset" name="Annuler" value="Annuler"> <br>
    <input type="submit" 
    <?= ($leProfesseur != null) ? 'name="Modifier" value="Modifier"' :'name="Valider" value="Valider"' ?> >
    <?= ($leProfesseur != null) ? '<input type="hidden" name="idprofesseur" value="'.$leProfesseur['idprofesseur'].'">':'' ?>
</form>