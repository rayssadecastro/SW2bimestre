<?php
//dados de sgbd mysql para a conexão 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "teste_mysqli";

// criando a conexão 
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

//checando conexao 
if($conexao->connect_error){
    die("Conexão falhou:" . $conn->connect_error);
}
//echo "Conectado com sucesso";

?>