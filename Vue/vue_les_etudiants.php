<h3>Liste des etudiants</h3>
<br>
<form action="#" method="post">
    Filtrer par : <input type="text" name="mot">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1">
    <tr>
        <td>Id etudiant</td><td>Nom</td>
        <td>Prenom</td><td>Email</td><td>Adresse</td>
        <td>Statut</td>
        <td>Operation</td>
    </tr>
    <?php
    if (isset($lesEtudiants)) {
        foreach ($lesEtudiants as $unEtudiant) {
            echo "<tr>";
            echo "<td>".$unEtudiant['idetudiant']."</td>";
            echo "<td>".$unEtudiant['nom']."</td>";
            echo "<td>".$unEtudiant['prenom']."</td>";
            echo "<td>".$unEtudiant['email']."</td>";
            echo "<td>".$unEtudiant['adresse']."</td>";
            echo "<td>".$unEtudiant['statut']."</td>";
            echo "<td> <a href=''> <img src='images.supprimer.png' height='40' width='40'> </a></td>";
            echo "<td> <a href=''> <img src='images.editer.png' height='40' width='40'> </a></td>";
            echo "</tr>";
        }
    }
    ?>
</table>