<?php
// incluir o arquivo de conexao sempre que precisar acessar o sgbd
include_once 'conecta.php';

//consulta em sql que sera executada na bse de dados 
$sql = "SELECT * FROM alunos";

//armazena o resultado da consulta 
$resultado = mysqli_query($conexao, $sql);
if(mysqli_num_rows($resultado) > 0){
    //saida de dados da tabela 
    while ($linha = mysqli_fetch_assoc($resultado)){
        echo "id: " . $linha["id"]. "<br>";
        echo "Nome: " . $linha["nome"]. "<br>";
        echo "Curso: " . $linha["curso"]. "<br>";
        echo "Idade: " . $linha["idade"]. "<br>";
    }
}else{
        echo "0 resultados";
    }


//fechar a conexao
mysqli_close($conexao);
?>