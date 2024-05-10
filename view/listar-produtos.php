<?php include("cabecalho.php");
    include("../repository/conexaoBD.php");
    include("../repository/DAO-Produto.php");
?>
<h1>Listagem</h1>
<?php

if(array_key_exists("removido", $_GET) && $_GET["removido"] == "true"){
    echo "<p class='alert-success'>Produto removido com sucesso!</p>";
}

if(array_key_exists("atualizou", $_GET) && $_GET["atualizou"] == "true"){
    echo "<p class='alert-success'>Produto atualizado com sucesso!</p>";    
}

$produtos = listarProdutos($conexao);
?>
<table class = "table">
<?php

foreach($produtos as $produto){
    echo "<tr>";
        echo "<td>";
            echo $produto["id"];
        echo "</td>";

        echo "<td>";
            echo $produto["nome"];
        echo "</td>";

        echo "<td>";
            echo "R$ ".$produto["preco"];
        echo "</td>";

        echo "<td>";
            echo $produto["nomeCategoria"];
        echo "</td>";

        echo "<td>";
            echo "<form action='remover-produto.php' method='POST'>";
                echo "<input type='hidden' name='id' value={$produto['id']}>";
                echo "<input class='btn btn-danger' type='submit' class='text-danger' value='Remover'>";
            echo "</form>";
        echo "</td>";

        echo "<td>";
            echo "<form action='formulario-atualizar-produto.php' method='POST'>";
                echo "<input type='hidden' name='id' value={$produto['id']}>";
                echo "<input type='hidden' name='nome' value={$produto['nome']}>";
                echo "<input type='hidden' name='preco' value={$produto['preco']}>";  
                echo "<input class='btn btn-warning' type='submit' class='text-danger' value='Atualizar'>";  
            echo "</form>";    
        echo "</td>";
    echo "</tr>";
}
?>
</table>