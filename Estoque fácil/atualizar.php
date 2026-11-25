<?php

include "config/conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$qtd = $_POST['qtd'];

$sql = "UPDATE tb_produtos SET
        nome = '$nome',
        qtd = '$qtd',
        preco = '$preco',
        categoria = '$categoria'
        WHERE id = $id";

if($conexao->query($sql)){
    echo "Produto atualizado com sucesso";
}
else{
    echo "Erro ao atualizar";
}
echo "<br> <a href= 'listar.php'>Voltar</a>";