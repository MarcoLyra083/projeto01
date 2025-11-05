<?php
    require_once "admin/config.inc.php";
    $sql = "SELECT titulo, data_publicacao, autor FROM posts ORDER BY data_publicacao DESC";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){

        echo "<h1>Publicações Recentes</h1>";
        echo "<hr>";

        while($dados = mysqli_fetch_array($resultado)){
?>
    <div>
        <h2>Título: <?=$dados['titulo']?></h2>
        <p>Data: <?=$dados['data_publicacao']?></p>
        <p>Autor: <?=$dados['autor']?></p>
    </div>
    <hr>
    <?php
        } 
    }else{
      
        echo "<h2>Ops! Não encontramos nenhum artigo.</h2>";
    }
?>