<?php
include 'operaciones.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body> 
        <?php include 'html.php';?>
        Texto Sin Programar
        <br>
        <?php
        /*para definir una variable usamos el signo $*/
        $saludo="Mundo Variable"; /*VARIABLE*/
        echo "Hola Mundo";
        echo "<br>";
        echo "Hola ".$saludo; /*LLAMAMOS VARIABLE*/
        ?>
        
        <br>
        <?php
        /*Arreglo con foreach*/
        $meses["enero"]="verano";
        $meses["febrero"]="verano";
        $meses["marzo"]="verano/otoño";
        $meses["abril"]="otoño";
        $meses["mayo"]="otoño/invierno";
        $meses["junio"]="invierno";
        $meses["julio"]="invierno";
        $meses["agosto"]="invierno";
        $meses["septiembre"]="invierno/primavera";
        $meses["octubre"]="primavera";
        $meses["noviembre"]="primavera";
        $meses["diciembre"]="primavera/verano";
        
        foreach($meses as $mes){
            echo $mes."<br>";
        }
        ?>
        
        
        <br>
        Variables Goblajes S_SERVER
        <br>
        <pre>
        <?php
        var_dump($_SERVER);/*Imprime contenido del directorio*/ 
        ?>
        </pre>
        
    </body>
</html>
