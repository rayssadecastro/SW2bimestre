<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$user = 'rayssa';
$pass = '1234';

if(($usuario == $user )&& ($senha == $pass)){
   // echo "OK usuario validado";
   session_start();
   $_SESSION['nome'] = $usuario;
   $_SESSION['logado'] = 1;

    header("Location: restrita.php");
}
else{
    echo"usuario e/ou senha incorretos";
}