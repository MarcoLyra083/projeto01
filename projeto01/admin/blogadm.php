<?php

require_once "config.inc.php";


echo "<a href='?pg=publicacoes-form'>Cadastrar Publicação</a>";

echo "<h1>Lista de Publicações</h1>";


$sql = "SELECT * FROM publicacoes";
$resultado = mysqli_query($conexao, $sql);


if(mysqli_num_rows($resultado) > 0){
    
   
    while($dados = mysqli_fetch_array($resultado)){
        
        echo "ID: " . $dados['id'] . "<br>";
        
        echo "Título: " . $dados['titulo'] . "<br>";
        echo "Autor: " . $dados['autor'] . "<br>";
        echo "Data de Publicação: " . $dados['data_publicacao'] . "<br>";
        
        
        echo " <a href='?pg=publicacoes-form-alterar&id=$dados[id]'>Editar</a>";
        echo "| <a href='?pg=publicacoes-excluir&id=$dados[id]'>Excluir</a>";
        echo "<hr>";
    }
    
} else {
    
    echo "<h3>Nenhuma publicação cadastrada!</h3>";
}

?>