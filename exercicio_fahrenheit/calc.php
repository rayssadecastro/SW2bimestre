<?php

$esc = $_POST['escolha'];
$temp = $_POST['valor'];


if($esc == 1) {
    $temp = ($temp * 9 / 5) + 32;
}
else
    {
        if($esc == 2){
            $temp = ($temp - 32) * 5 /9;
        }
    }
echo " a temperatura é : " . $temp;

