<?php 
    include("conexaoBD.php");
    include("DAO-Produto.php");
?>

<?php

$id = $_POST["id"];
removerProduto($conexao, $id);
header("Location: listar-produtos.php?removido=true");
die();
?>