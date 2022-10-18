<?php

class calculadora {

    public function __construct($numero, $n, $k)
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
        for($binomial1 = 1; $n > 1; $n--){
            $binomial1 = $binomial1*$n;
            
            for($binomial2 = 1; $k > 1; $k--){
               $binomial2 = $binomial2*$k;     
            }
        }
    }


    
    

}

?>