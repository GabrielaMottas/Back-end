<?php

$email = "gabimottas@gmail.com";
$senha = "gabi321@";
$ativo = true;
echo "Login - Facebook <br>";

if ($email == "gabimottas@gmail.com" &&
    $senha == "gabi321@" && $ativo == true){
        echo "login autorizado...";
    }
else{
    echo "usuário ou senha invalidos";
}
?>