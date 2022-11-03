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


    
    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);


    echo ("<h1>Cuadrado Mágico</h1>");

    



function analizarCuadradoMagico($cuadrado1){
    $primera_diagonal = 0;
    $segunda_diagonal = 0;
    
    $cuadrado1 = array(
        array(4,9,2),
        array(3,5,7),
        array(8,1,6)
    ); 

for ($i=0; $i < count($cuadrado1); $i++) { 

                $sumaFila = 0;
                $sumaColumna = 0;

    for ($j=0; $j < count($cuadrado1[$i]); $j++){

        $sumaFila = $sumaFila + $cuadrado1[$i][$j];
        $sumaColumna = $sumaColumna + $cuadrado1[$j][$i];

        if($i == $j){
            $primera_diagonal = $primera_diagonal + $cuadrado1[$i][$j];
            
        }
        if($i + $j = count($cuadrado1)-1){
            $segunda_diagonal = $segunda_diagonal + $cuadrado1[$j][$i];
        }
    }



}

/*
$arraysum = 0;
    foreach($cuadrado1 as $cuadrado =>$values){
        $arraysum += $values[]
    }
    */

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

echo (pintarCuadradoMagico($cuadrado1));



?>

</body>
</html>