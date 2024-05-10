<?php
    include("conexaoBD.php");
    include("DAO-Produto.php");
?>

<?php
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $atualizou = "false";

    if(atualizarProduto($conexao, $id, $nome, $preco)){
        $atualizou = "true";
    }

    header("Location: listar-produtos.php?atualizou={$atualizou}");
?>