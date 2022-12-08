<center>

    <h1>Formulaire</h1>
    <?=$data!=null?$id=$data->id:''?>
    <?php
    if ($data!=null) 
    {
        $cne=$data->cne;
    } 
    else
    {
        $cne=$data2;
        
    } 
    ?>
    <form action="../<?=$data==null?"store":"update/$id"?>" method="post">
    <input type="hidden" name="cne" value="<?=$cne?>">
    <table>
        <tr>
            <td><label for="Semaine">Semaine :</label></td>
            <td><input type="text" placeholder="Semaine..." name="semaine"  value="<?=$data!=null?$data->semaine:''?>"></td>
        </tr>
        <tr>
            <td><label for="Nbr Absences">Nbr Absences :</label></td>
            <td><input type="text" placeholder="Nbr Absences..." name="nbr_abs" value="<?=$data!=null?$data->nbr_abs :''?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="envoyer"></td>
            <td><input type="reset" value="Anuler"></td>
        </tr>
    </table>
    </form>
</center>