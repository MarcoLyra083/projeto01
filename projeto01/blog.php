<?php
require_once "admin/config.inc.php";

$sql = "SELECT * FROM blog";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo "<h1>BLOG</h1>";
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while ($dados = mysqli_fetch_assoc($resultado)) {
            ?>
            <tr>
                <td><?= htmlspecialchars($dados['titulo'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= htmlspecialchars($dados['autor'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= htmlspecialchars($dados['data'], ENT_QUOTES, 'UTF-8') ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <?php
} else {
    echo "<h2>Nenhum blog cadastrado.</h2>";
}
?>
