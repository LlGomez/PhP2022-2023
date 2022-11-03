<!doctype html>
<html>
<head>
<link href="estilos_cuadrado_magicos.css"
      rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <title>Cuadrado Magico</title> 
</head>
<body>
<?php

class Cuadrado{


function __construct()
{
    $cuadrado1 = array(
        array(4,9,2),
        array(3,5,7),
        array(8,1,6)
    ); 
}


function analizarCuadradoMagico($cuadrado1){

}


function pintarCuadradoMagico($cuadrado1){

    echo "<table>";
    for ($i=0; $i < count($cuadrado1); $i++) { 
    echo "<tr>";
    for ($j=0; $j < count($cuadrado1[$i]); $j++) { 
    
        echo "<td>".$cuadrado1[$i][$j]."</td>";
    }
    echo "</tr>";
}
echo "</table>";

}



function testcuadrado1(){
    
}

function test($testEjecutar)
{
    try 
    {
        echo "<br>";
        $resultadoTest = $testEjecutar();
        $mensaje = 'El test: '.$testEjecutar.' ';
        $mensajeResultado = $resultadoTest ? 'OK' : 'KO';
        echo $mensaje.$mensajeResultado;

    }
    catch(Exception $e)
    {
        echo "<br>"."Se ha producido una excepción al ejecutar:".$testEjecutar."<br>";

    } 
}

}



?>