<?php include_once "header.php";

    session_start();
    if (isset($_SESSION['mensagem'])) {
        $mensagem = $_SESSION['mensagem'];
        echo '<p>'. $mensagem. '</p>';
        unset($_SESSION['mensagem']);
    }
?>
    <ul>
        <li><a href="painel.php">Voltar para o painel</a></li>
    </ul>

<?php include_once "footer.php"; ?>