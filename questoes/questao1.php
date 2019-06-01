<?php

    class Questao1 
    {

        public function imprimir()
        {
            for($i=1; $i <=1000; $i++){

                if($i%3 == 0 && $i%5 == 0){
                    echo "FizzBuzz";
                }else if($i%3 == 0){
                    echo "Fizz";
                }else if($i%5 == 0){
                    echo "Buzz";
                }else{
                    echo $i;
                }
        
                echo "<br>";
            }
        }

    }    

    $questao1 = new Questao1();
    $questao1->imprimir();

?>