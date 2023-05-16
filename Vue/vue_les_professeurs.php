<h3>Liste des professeurs</h3>
<br>
<form action="#" method="post">
    Filtrer par : <input type="text" name="mot">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1">
    <tr>
        <td>Id professeur</td><td>Nom</td>
        <td>Prenom</td><td>Email</td><td>Diplome</td>
        <td>Operations</td>
    </tr>
    <?php
    if (isset($lesProfesseurs)) {
        foreach ($lesProfesseurs as $unProfesseur) {
            echo "<tr>";
            echo "<td>".$unProfesseur['idprofesseur']."</td>";
            echo "<td>".$unProfesseur['nom']."</td>";
            echo "<td>".$unProfesseur['prenom']."</td>";
            echo "<td>".$unProfesseur['email']."</td>";
            echo "<td>".$unProfesseur['diplome']."</td>";
            echo "<td> <a href='index.php?page=3&action=sup&idprofesseur=".$unProfesseur['idprofesseur']."'> 
            <img src='images/supprimer.png' height='40' width='40'> </a>";
            echo "<a href='index.php?page=3&action=edit&idprofesseur=".$unProfesseur['idprofesseur']."'> <img src='images/editer.png' height='40' width='40'> </a></td>";
            echo "</tr>";
        }
    }
    ?>
</table>