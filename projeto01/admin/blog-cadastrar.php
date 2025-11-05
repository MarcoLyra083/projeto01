<?php
    // Inclui o arquivo de configuração e conexão com o banco de dados.
    require_once "config.inc.php";

    // 1. Verifica se a requisição foi feita via POST (envio de formulário)
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
       
        
        $titulo           = mysqli_real_escape_string($conexao, $_POST["titulo"]);
        $autor            = mysqli_real_escape_string($conexao, $_POST["autor"]);
        $data_publicacao  = mysqli_real_escape_string($conexao, $_POST["data_publicacao"]); 

        

        $sql = "INSERT INTO posts (titulo, autor, data_publicacao, conteudo) 
                VALUES ('$titulo', '$autor', '$data_publicacao')";

    
        $executa = mysqli_query($conexao, $sql);
        
       
        if($executa) {
            echo "<h2>Post **'$titulo'** publicado com sucesso.</h2>";
          
            echo "<a href='?pg=posts-admin'>Gerenciar Posts</a>";
        } else {
            echo "<h2>Erro ao publicar o post.</h2>";
            echo "<p>Detalhes do Erro: " . mysqli_error($conexao) . "</p>";
            echo "<a href='?pg=posts-admin'>Tentar Novamente</a>";
        }
    } else {
        
        echo "<h2>Acesso negado.</h2>";
        echo "<a href='?pg=posts-admin'>Voltar para o Painel</a>";
    }
?>