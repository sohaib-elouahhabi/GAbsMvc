<center>
    <h1>Formulaire</h1>
    <?=$data!=null?$id=$data->id:''?>
    <form action="<?=$data==null?"store":"../update/$id"?>" method="post">
    <table>
        <tr>
            <td><label for="Cne">Cne :</label></td>
            <td><input type="number" placeholder="Cne..." name="cne"  value="<?=$data!=null?$data->cne:''?>"></td>
        </tr>
        <tr>
            <td><label for="Nom">Nom :</label></td>
            <td><input type="text" placeholder="Nom..." name="nom"  value="<?=$data!=null?$data->nom:''?>"></td>
        </tr>
        <tr>
            <td><label for="Nom">Prenom :</label></td>
            <td><input type="text" placeholder="Prenom..." name="prenom" value="<?=$data!=null?$data->prenom :''?>"></td>
        </tr>
        <tr>
            <td><label for="Groupe">Groupe :</label></td>
            <td><input type="number" placeholder="Groupe..." name="groupe" value="<?=$data!=null?$data->groupe :''?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="envoyer"></td>
            <td><input type="reset" value="Anuler"></td>
        </tr>
    </table>
    </form>
</center>