<?php
    function listarCategorias($conexao){
        $categorias = array();
        $resultado = mysqli_query($conexao, "SELECT * FROM Categoria");

        while($categoria = mysqli_fetch_assoc($resultado)){
            array_push($categorias, $categoria);
        }

        return $categorias;
    }
?>