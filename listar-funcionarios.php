<?php
    include_once "header.php";
    include "database.php";

    session_start();

    $sql = "SELECT * FROM funcionarios";

    $resultado = mysqli_query($conexao, $sql);

    echo "<table>";
    while($linha = mysqli_fetch_assoc($resultado)){
        echo "<tr><td>Nome:</td>";
        echo "<td>".$linha["nome"]."</td>";
        echo "<tr><td>Telefone:</td>";
        echo "<td>".$linha["telefone"]."</td>";
        echo "<tr><td>Email:</td>";
        echo "<td>".$linha["email"]."</td></tr>";
    }
    echo "</table>";
?>

    <ul>
        <li><a href="painel.php">Voltar para o painel</a></li>
    </ul>

<?php include_once "footer.php"; ?>