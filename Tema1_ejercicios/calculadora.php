<?php

class calculadora {

    public function __construct($numero, $k, $n)
    {
        $this->numero = $numero;
        $this->n = $n;
        $this->k = $k;
    }

    public function obtieneFactorial(){
        $numero = $this->numero;
        for($factorial = 1; $numero > 1; $numero--){
            $factorial = $factorial*$numero;
        }
        return $factorial;
    }


    public function coeficienteBinomial($n, $k){
        $n = $this->n;
        $k = $this->k;
        $factorial = $this->factorial;
        
         



        /*for($factorialn = 1; $n > 1; $n--){
            $factorialn = $factorialn*$n;
        
        }

        for($factorialk = 1; $k > 1; $k--){
            $factorialk = $factorialk*$k;     
         }
         
         */

    }


    public function convierteBinarioDecimal($cadenaBits){

    }
    

}

?>