<?php

class Calculadora{
            
           public function obtenerFactorial($numero){

                $resultado = 1;
                
                if($numero == 0){
                    return 1;
                } elseif($numero > 0){
                    
                    while($numero > 0){
                        $resultado = $resultado * $numero;
                        $numero--;
                    }
                    return $resultado;
                } 

            }

           public function coeficienteBinominial($n, $k){

                $resultado = ($this->obtenerFactorial($n)) / ($this->obtenerFactorial($k) * $this->obtenerFactorial($n - $k));

                return $resultado;
            }

           public function convierteBinarioDecimal($binario){
                
                $decimal = bindec($binario);
                return $decimal;
                
            }

           public function sumaNumerosPares($arrayNumeros){

                $resultado = 0;

                for ($i=0; $i < count($arrayNumeros); $i++) { 
                    if ($arrayNumeros[$i] % 2 == 0) {
                        $resultado = $resultado + $arrayNumeros[$i];
                    }
                }
                return $resultado;
            }

           public function esPalindromo($palabra1, $palabra2){

                
                $palabra1Dividida = str_split($palabra1);

                $palabra1Invertida = array_reverse($palabra1Dividida);

                $palabra1InvertidaString = "";

                for ($i=0; $i < count($palabra1Invertida); $i++) { 
                    $palabra1InvertidaString = $palabra1InvertidaString . $palabra1Invertida[$i];
                }

                if ($palabra1InvertidaString == $palabra2) {
                    return true;
                } else {
                    return false;
                }

            }

          public function sumaMatrices($matriz1, $matriz2){
                
               

                for ($i=0; $i < count($matriz1); $i++) { 
                    $suma[] = array();
                    for ($j=0; $j < count($matriz1); $j++) { 
                        $suma[$i][] = $matriz1[$i][$j] + $matriz2[$i][$j];
                    }

                    return $suma;

                }


            }



        }

        ?>