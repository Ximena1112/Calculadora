<!DOCTYPE 
<html>
    <head>
        <title>Costo de una llamada telefónica</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $costo_por_minuto = floatval ($_POST['costo_por_minuto']);
    $tiempo_en_minutos = floatval ($_POST['tiempo_en_minutos']);
    $costo=$tiempo_en_minutos*$costo_por_minuto;
    echo 'Valor de costo: ' . $costo . "<br/>\n";
}
 
?>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" borde="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="costo_por_minuto">Ingresa el valor por minuto:</label>
                        </td>
                        <td>
                            <input name="costo_por_minuto" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tiempo_en_minutos">Ingresa el valor de tiempo en minutos:</label>
                        </td>
                        <td>
                            <input name="tiempo_en_minutos" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>
