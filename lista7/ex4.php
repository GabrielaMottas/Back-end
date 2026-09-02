<?php


function verificarIdade($idade){
    if($idade<16){
        return"Não pode votar";
    }elseif($idade<18){
        return"Voto Opcional";
    }else{
        return "Voto obrigatório";
    }
}
echo verificarIdade(17);
?>