<?php

class calculadora {

    public function __construct($numero, $k, $n, $cadenaBits, $array)
    {
        $this->numero = $numero;
        $this->n = $n;
        $this->k = $k;
        $this->cadenaBits = $cadenaBits;
        $this->array = $array;
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
        
        for ($n = 0; $n <= $factorial; $n++)
        {
            $binom = 1;
            for ($k = 0; $k <= $n; $k++)
            {

         if($n != 0 && $k != 0){
            $binom = $binom * ($n - $k +1) / $n;
            echo $binom;
         }

        }
    }



        /*for($factorialn = 1; $n > 1; $n--){
            $factorialn = $factorialn*$n;
        
        }

        for($factorialk = 1; $k > 1; $k--){
            $factorialk = $factorialk*$k;     
         }
         
         */

    }


    public function convierteBinarioDecimal($cadenaBits){
        $cadenaBits = $this->cadenaBits;
        
        $cadenaBits = "1001";
    
        for($i=1; $i<0; $i++){
            $potencias = 2**$i;
            echo $potencias;
        }

    

        /*for($i=0;$i<strlen($cadenaBits); $i++){
            echo $cadenaBits;
        }

        */
    
        //echo bindec($cadenaBits);
    }
    
    

    public function sumaNumerosPares($array) {
        
        $array = array(1, 3, 4);
        $suma = 0;
  for ($i = 0; $i < $array; $i++) {
        if($array[$i] % 2 == 0){
          $suma = $suma + $array[$i];   
        }
           
  }
   return $suma;
}

public function esPalindromo($cadena){

}

}

?>