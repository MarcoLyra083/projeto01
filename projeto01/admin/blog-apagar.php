<?php

   
    require_once "config.inc.php"; 

    $id_do_post = $_GET['id'];

   
    $sql_delete = "DELETE FROM posts WHERE id = $id_do_post";

   
    if(mysqli_query($conexao, $sql_delete)){
        
        
        echo "<h1>sucesso</h1>";
        echo "<p>O post com ID **$id_do_post** foi apagado da tabela 'posts'.</p>";
        
        echo "<p><a href='?pg=posts-admin'>Clique aqui para voltar</a></p>";
        
    } else {
        
      
        echo "<h1>erro</h1>";
        echo "<p>Não foi possível excluir o post. Verifique a conexão com o banco.</p>";
        
        echo "<p>Erro do Sistema: " . mysqli_error($conexao) . "</p>";
        echo "<p><a href='?pg=posts-admin'>Tentar Novamente</a></p>";
        
    }

    
    mysqli_close($conexao);

?>