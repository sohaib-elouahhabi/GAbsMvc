<center>
<h1 >La liste des eleves</h1>
        <table border="3">
            <tr>
                <th>CNE</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>Groupe</th>
                <th colspan="4"><a href="Eleves/create">Ajouter</a></th>
            </tr>
            <?php
            foreach($data as $E)
            {?>

            <tr>
                <td><?=$E->cne ?></td>
                <td><?=$E->nom ?></td>
                <td><?=$E->prenom ?></td>
                <td><?=$E->groupe ?></td>
                <td><a href="Eleves/destroy/<?=$E->id ?>">delete</a></td>
                <td><a href="Eleves/edit/<?=$E->id ?>">edit</a></td>
                <td><a href="Eleves/show/<?=$E->id ?>">show</a></td>
                <td><a href="Absences/showabs/<?=$E->cne ?>">show Absence</a></td>

            </tr>

            <?php
            }
            ?>
        </table>
</center>   
