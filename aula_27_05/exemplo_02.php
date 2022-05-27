<?php
    $numero = [3,5,8,10,20,23,57];
    //criar uma função para somar os valores de um vetor
    function soma($abacaxi){
        $soma = 0;
        echo"Todos os numero impares contidos no Vetor <br>";
        for($i=0;$i<count($abacaxi);$i++){
            //echo"$abacaxi[$i] <br>";
            $soma = $soma + $abacaxi [$i];
            
            if($abacaxi [$i] % 2 == 1){
                
                echo"$abacaxi[$i] <br>";
            }
            
        }
        echo"A soma é: $soma";

    }
    soma($numero);

?>