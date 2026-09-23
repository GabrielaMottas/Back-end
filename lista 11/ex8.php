<?php

$kilos=$_POST["kilos"];
$multa=(($kilos-50)*4);


if($kilos > 50){
    echo"O valor da multa é de $multa";
}else{
    echo"Não será cobrada multa sobre o valor comprado!";
}
?>