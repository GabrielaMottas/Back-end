<?php

$email= $_POST["email"];
$senha= $_POST["senha"];

if($email == "gabimottas@gmail.com" && $senha == "Gabi123"){
    echo"Login bem sucedido!";
}else{
    echo"Login ou senha inválido!";
}
?>
