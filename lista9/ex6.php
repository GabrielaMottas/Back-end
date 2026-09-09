<?php
$musicas = ["Gavetas", "Jardim", "Abro mão", "Odres novos", "99 ovelhas", "Nunca igual"];

echo"Suas músicas são:<br>";
foreach($musicas as $m){
    echo"$m<br>";
}
$qtd= count($musicas);

echo"<br>Quantidade de músicas: ", $qtd;

?>