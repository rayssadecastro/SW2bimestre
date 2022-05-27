<?php
    echo"Função sem retorno e sem parametros <BR>";
    function teste(){
        echo "Rayssa Castro";
    }
    teste();
    echo"<hr>";

    echo"Função com retorno e sem parametros <BR>";
    function teste2(){
        $retorno = "Another Text";
        return $retorno;
    }
    $recebe = teste2();
    echo"$recebe <br>";
    echo"<hr>";

    echo"Função sem retorno e com parametros <BR>";
    function teste3($a){
        echo"$a<br>";
      
    }
    $x= 10;

    teste3('Oi galera');
    teste3('Aula de SW-I');
    teste3('Aula de SW-I');
    teste3('Aula de SW-I');
    teste3('Aula de SW-I');
    teste3($x);

    echo"<hr>";

    echo"Função com retorno e com parametros <BR>";
    function teste4($x, $y){
    $soma = $x + $y;
    return $soma;
    }
    $resultado = teste4(10,20);
    echo"A soma é: $resultado";
    echo"<hr>";
?>

