<?php
    include("cabecalho.php");
    include("../repository/conexaoBD.php");
    include("../repository/DAO-Produto.php");
?>

<?php
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
?>

<h1>Atualizar</h1>
<form action="atualizar-produto.php" method="POST">
    <table class="table">
        <tr>
            <td>ID:</td>
            <td><input type="text" name="id" value=<?=$id?>></td>
        </tr>

        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome" value=<?=$nome?>></td>
        </tr>
        
        <tr>
            <td>Preço:</td>
            <td><input type="number" name="preco" value=<?=$preco?>></td>
        </tr>
        
        <tr>
            <td colspan="2"><input class="btn btn-success" type="submit" value="Atualizar"><td>
        </tr>
    </table>
</form>