
<!DOCTYPE html>
<html>

<head>

<body>
    <h1> Calculadora </h1>
    

    <h3>Factorial</h3>
<?php



require "calculadora.php";
    
$numero = 4;
$n = 4;
$k = 2;

$calculadora = new Calculadora;

if (isset($numero)){
    echo "El factorial de $numero es " , $calculadora->obtenerFactorial($numero);
} 



?>

<h3>Coeficiente Binomial</h3>

<?php
echo "El coeficiente binominial de $n y $k es " . $calculadora->coeficienteBinominial($n, $k);

?>

<h3>Binario a decimal</h3>

<?php

$binario = 1001;
echo $binario . " en decimal es " . $calculadora->convierteBinarioDecimal($binario);

?>

<h3>Suma de numeros pares en un array</h3>


<?php


$arrayNumeros = array(1,3,4,6,7);

echo "La suma de los números pares del array es: " . $calculadora->sumaNumerosPares($arrayNumeros);
?>


<h3>Palindromo</h3>

<?php

$palabra1 = "amor";
$palabra2 = "roma";

if ($calculadora->esPalindromo($palabra1, $palabra2) == 1) {
    echo $palabra1 . " y " . $palabra2 . " son palindromos";
} 

?>

<h3>Suma de matrices</h3>

<?php

$matriz1 = array(
    array(2, 0, 1),
    array(3, 0, 0),
    array(5, 1, 1)
);
$matriz2 = array(
    array(1, 0, 1),
    array(1, 2, 1),
    array(1, 1, 0)
);
$suma = array();

echo $calculadora->sumaMatrices($matriz1, $matriz2);


?>
</body>

</head>

</html>

