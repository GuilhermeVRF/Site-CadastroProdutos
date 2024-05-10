
<?php
    function inserirProduto($conexao, $nome, $preco, $idCategoria){
        $query = "INSERT INTO Produto (nome, preco, idCategoria) VALUES ('{$nome}',{$preco}, {$idCategoria});";   
        return mysqli_query($conexao, $query);
    }

    function listarProdutos($conexao){
        $produtos = array();
    
        $resultado = mysqli_query($conexao, "SELECT P.*, C.nomeCategoria FROM Produto AS P, Categoria AS C
         WHERE P.idCategoria = C.idCategoria");
        while($produto = mysqli_fetch_assoc($resultado)){
            array_push($produtos, $produto);
        }
    
        return $produtos;
    }

    function removerProduto($conexao, $id){
        $query = "DELETE FROM Produto WHERE id={$id}";
        return mysqli_query($conexao, $query);
    }

    function atualizarProduto($conexao, $id, $nome, $preco){
        $query = "UPDATE Produto SET nome='{$nome}', preco = {$preco} WHERE id= {$id};";
        return mysqli_query($conexao, $query);
    }
