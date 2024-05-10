<?php include("cabecalho.php");
    include("conexaoBD.php");
    include("DAO-Produto.php");
?>

<?php

    $nomeProduto = $_POST["nomeProduto"];
    $precoProduto = $_POST["precoProduto"];
    $idCategoria = $_POST["idCategoria"];
    $inseriu;
   
    if(inserirProduto($conexao, $nomeProduto, $precoProduto, $idCategoria)){       
        $inseriu = "true";
    }else{
        $inseriu = "false";
    }

    header("Location: formulario-produto.php?inseriu={$inseriu}");
    die();
?>
<?php include("rodape.php")?>