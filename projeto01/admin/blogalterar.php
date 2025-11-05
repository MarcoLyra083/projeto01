<?php


require_once "config.inc.php";


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    
    $autor   = $_POST["autor"];
    $titulo  = $_POST["titulo"];
    $data_publicacao = $_POST["data_publicacao"];
    $id      = $_POST["id"];

    
    $sql = "UPDATE publicacoes SET 
                autor = '$autor',
                titulo = '$titulo',
                data_publicacao = '$data_publicacao'
            WHERE id = '$id'"; 

    
    $executa = mysqli_query($conexao, $sql);
    
  
    if($executa) {
        echo "<h2>Alteração da Publicação realizada com sucesso.</h2>";
       
        echo "<a href='?pg=publicacoes-admin'>Voltar</a>";
    } else {
        echo "<h2>Erro ao alterar a publicação.</h2>";
        echo "<a href='?pg=publicacoes-admin'>Voltar</a>";
    }
    
} else {
   
    echo "<h2>Acesso negado.</h2>";
    echo "<a href='?pg=publicacoes-admin'>Voltar</a>";
}

?>