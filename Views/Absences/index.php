<center>
<h1 >La liste des absences</h1>
        <table border="3">
            <tr>
                <th>CNE</th>
                <th>SEMAINE</th>
                <th>NBR ABSENCES</th>
                <th colspan="3"><a href="../create/<?=$data2 ?>">Ajouter</a></th>
            </tr>
            <?php
            foreach($data as $E)
            {?>
            <tr>
                <td><?=$E->cne ?></td>
                <td><?=$E->semaine ?></td>
                <td><?=$E->nbr_abs ?></td>
                <td><a href="../../Absences/destroy/<?=$E->idAb ?>">delete</a></td>
                <td><a href="../../Absences/edit/<?=$E->idAb ?>">edit</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
        <h3> <a href="../../Eleves">retour</a></h3>
</center>   
