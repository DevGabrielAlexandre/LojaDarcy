<?php
  include_once("../../../includes/conexao.php");
  $id = $_POST["ID"];
  $categoria = $_POST["CATEGORIA"];

  $gravar = mysqli_query($conexao,"DELETE FROM tb_categorias 
                                   WHERE ID = '$categoria' ");
  
   if ($gravar){
    echo "Categoria Removida com sucesso";
   }else{
    echo "ERRO AO TENTAR REMOVER";
   }
?>  