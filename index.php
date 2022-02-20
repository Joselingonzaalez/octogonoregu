<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cálculo de área</title>

</head>

<body>

<?php

    if (isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {

        $lados = $_POST['lado'];
        $apotemas = $_POST['apotema'];
        $area = null;

    if (!empty($lados) or !empty($apotemas)) {
        
        echo " <h2>Resultado: </h2>";

        $area = (($lados*8)*$apotemas) / 2;

        echo "<br>Lado: " . $lados;
        echo "<br>Altura: " . $apotemas;
        echo "<br>Área del octágono: " . $area;
        echo "<br>";
        }
    }

?>
    
    <h1>Área de un Octágono regular</h1>

    <div class="explicacion">
        <p>Un octógono es un polígono con ocho lados, y por lo tanto ocho vértices. Un octógono regular isométrico encaja perfectamente dentro de una circunferencia.</p>
        <p> Si lo que queremos es calcular la superficie o área de un octágono regular, deberemos aplicar la fórmula matemática que dice que el área es igual a la multiplicación del perímetro por el apotema dividida entre dos.</p>
        <p>A = P x AP / 2</p>
    </div>

    <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="lado">Lado:</label>
                        </td>
                        <td>
                            <input name="lado" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="apotema">Apotema:</label>
                        </td>
                        <td>
                            <input name="apotema" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr align="center">
                    <tr>
                    <td><input type="submit" name="btn" value="Calcular"></td>
                    <td><input type="reset" name="limpiar" value="Limpiar"></td>
                </tr>
            </table>
        </form>
    </div>  
</tbody>
</form>
</body>
</html>