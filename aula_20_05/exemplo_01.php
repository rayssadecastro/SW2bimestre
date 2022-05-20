<?php
    $test = [10,'OI' ,1.6, true];

    //echo $test[1];
    $qtde = count ($test);

    echo "Numero de elementos no vetor, $qtde";
    echo"<hr>";
    for($i=0;$i<4;$i++){
        echo"valor do i = $i - valor : $test[$i]<br>";
    }
    echo"<hr>";
    $numero_qualquer = (rand(1,10))/10;
    //$resultado = $numero_qualquer/10;
    echo "$numero_qualquer";
    echo"<hr>";
    //somas
    $vetor = [1,5,8,10];
    $n = count($vetor);
    $soma = 0;
    for($a=0;$a<$n;$a++){
        $soma = $soma + $vetor[$a];        
    }
    echo $soma;
    echo"<hr>";
    //Media
    $vetor = [1,5,8,10];
    $n = count($vetor);
    $soma = 0;
    for($a=0;$a<$n;$a++){
        $soma = $soma + $vetor[$a]/4;        
    }
    echo $soma;
    echo"<hr>";


?>