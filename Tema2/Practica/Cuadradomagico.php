<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cuadrado Magico</title> 
</head>
<body>
<?php

$cuadrado1 = array(
    array(4,9,2),
    array(3,5,7),
    array(8,1,6)
);


 $primera_diagonal;
 $segunda_diagonal;



function analizarCuadradoMagico(){


}


function pintarCuadradoMagico(){
    $cuadrado1 = array(
        array(4,9,2),
        array(3,5,7),
        array(8,1,6)
    );

    echo '<table border="1">';
        foreach ( $cuadrado1 as $r ) {
        echo '<tr>';
        foreach ( $r as $v ) {
                echo '<td>'.$v.'</td>';
        }
        echo '</tr>';
}
echo '</table>';
}


?>

</body>
</html>