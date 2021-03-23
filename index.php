<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="create.php" method="get">
    
   <div class="form-group">
   <label for=""> Mois: </label>
        <select name="months" id="months">
            <?php
                $mois=array('JAN','FEV','MAR','AVR','MAI','JUI','JUI','AOU','SEP','OCT','NOV','DEC');
                for($i=0;$i<=11;$i++)
                {
                echo("<option value=\"$mois[$i]\"");
                echo(">$mois[$i]</option>");
                }
            ?>  
       </select>
   </div>
    

    <div class="formgroup">
        <label for=""> Flux: </label>
        <select name="flux" id="">
            <option value="Arrivee">Arrivee</option>
            <option value="Retour">Retour</option>
        </select>
    </div>
    <div class="formgroup">
        <label for=""> Produit: </label>
        <select name="produit" id="">
            <option value="Rcar">RCAR</option>
        </select>
    </div>
    <div class="formgroup">
        <label for=""> Titre: </label>
        <select name="titre" id="">
            <option value="cheque">chéque</option>
            <option value="Conssesion">Concession</option>
        </select>
    </div>
    <button type="submit">Submit</button>
    </form>
</body>
</html>
