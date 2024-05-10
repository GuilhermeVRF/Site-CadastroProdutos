<?php include("cabecalho.php");
    include("../repository/conexaoBD.php");
    include("../repository/DAO-Categoria.php");
?>


<?php
    if(array_key_exists("inseriu", $_GET)){
        if($_GET["inseriu"] == "true"){
        echo "<p class='alert-success'> O produto foi inserido!</p>";
        }else{
        echo "<p class='alert-danger'> O produto não foi inserido!</p>";
        }
    }
?>

<h1>Inserir</h1>
<form action="adicionar-produto.php" method="POST">
    <table class="table">
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nomeProduto"></td>
        </tr>
        
        <tr>
            <td>Preço:</td>
            <td><input type="number" name="precoProduto"></td>
        </tr>
        
        <tr>
            <td>Categoria:</td>
            <td>
                <?php
                    $categorias = listarCategorias($conexao);
                    foreach($categorias as $categoria){
                        echo "<input type='radio' name='idCategoria' value={$categoria['idCategoria']}> {$categoria['nomeCategoria']}";
                    }
                ?>
            </td>
        </tr>

        <tr>
            <td colspan="2"><input class="btn btn-success" type="submit" value="Cadastrar"><td>
        </tr>
    </table>
</form>
<?php include("rodape.php")?>