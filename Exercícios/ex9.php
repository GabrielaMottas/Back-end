<?php

$tipo = $_POST['tipo'];
$litros = $_POST['litros'];

if($tipo == "Gasolina"){
    echo "Você abasteceu, $litros litros <br>";
    echo "Total: ", ($litros*6.20);
}
elseif($tipo == "Etanol"){
    echo "Você abasteceu, $litros litros <br>";
    echo "Total: ", ($litros*4.20);
}
elseif($tipo == "Diesel"){
    echo "Você abasteceu, $litros litros<br>";
    echo "Total: ", ($litros*6);
}
?>