<?php

$idade = 60;
$nome = "Sr.João";
$desconto = false;

if($idade >= 65 || $desconto == true){
    echo "$nome tem desconto!";
}
else{
    echo "Sem desconto na compra...";
}
?>