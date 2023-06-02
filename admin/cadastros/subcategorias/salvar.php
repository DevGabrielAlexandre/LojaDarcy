<?php
    include_once("../../../includes/conexao.php");
    $categoria          = $_POST["txtCategoria"];
    $subCategoria       = $_POST["txtSubCategoria"];
    $alterar            = $_POST["alterando"];
    $id_subcategoria    = $_POST['id_alterar'];

    if ($alterar == 1){
        $atualizar == mysqli_query($conexao,
        "update tb_subcategorias ID_CATEGORIA = '$categoria', DESCRICAO = '$subCategoria', where ID = '$id_subcategoria'");

    if ($atualizar){
        echo "Alteração feita";

    }else{
        echo "Não foi possivel alterar";
        
    }
    exit();
    }else{
        $inserir = mysqli_query($conexao, "INSERT INTO tb_sub_categorias
         (ID_CATEGORIA, DESCRICAO) VALUES ('$categoria','$subCategoria')");
    

    if ($inserir){
        echo "Sub Categoria inserida com sucesso";
    }else{
        echo "Sub Categoria não foi inserida com sucesso";
    }
}    
    
    
?>