<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

class Calculadora
{

    function __construct()
    {

    }

    function factorial($x)
    {
        if ($x == 0)
        {
            return 1;
        }
        elseif ($x>0)
        {
            $resultado = 1;
            while ($x>0)
            {
                $resultado = $resultado * $x;
                $x = $x - 1; 
            }
            return $resultado;
        }
        else
        {
            throw new Exception("X ha de se mayor o igual a 0");
        }
    }

    function coeficienteBinomial($n, $k)
    {
        if (($n-$k) == 0)
            throw new Exception("Error n - k = 0");

        if ($k==0)
            throw new Exception("k=0");

        $factorial_n_menos_k = $this->factorial($n-$k);

        return $this->factorial($n) / ($this->factorial($k)*$factorial_n_menos_k) ;
    }
    //0123
    //1000
    function convierteBinarioDecimal($cadenaBits)
    {
        $longitudCadena = strlen($cadenaBits);

        $indiceCadena = $longitudCadena-1;

        $exponente = 0;
        $resultado = 0;

        while ($indiceCadena>=0)
        {
            $valorPosicion = $cadenaBits[$indiceCadena];
            $resultado = $resultado + ( (2**$exponente)*($valorPosicion)  );
            $exponente++;
            $indiceCadena--;
        }

        return $resultado;

    }

    function esPalindromo($primeraCadena, $segundaCadena)
    {
        return $primeraCadena == strrev($segundaCadena);
    }

    function esCapicua($cadena)
    {
        return $cadena == strrev($cadena);
    }

    function sumaMatricesCuadradas($primeraMatriz, $segundaMatriz)
    {
        $matrizAuxiliar = $primeraMatriz;

        $max_filas = count($primeraMatriz);

        for ($fila = 0; $fila < $max_filas; $fila++)
        {
            for ($columna = 0; $columna < $max_filas; $columna++)
            {
                $matrizAuxiliar[$fila][$columna] = $matrizAuxiliar[$fila][$columna] + $segundaMatriz[$fila][$columna];  
            }
        }

        return $matrizAuxiliar;

    }
}
