<?php include_once "header.php"; ?>

<?php
    session_start();
    if (isset($_SESSION['mensagem'])) {
        $mensagem = $_SESSION['mensagem'];
        echo '<p>'. $mensagem. '</p>';
        unset($_SESSION['mensagem']);
    }
?>

<form action="login-usuario.php" method="POST">
    <label for="usuario">LOGIN: </label>
    <input type="text" name="login" id="usuario" placeholder="Informe seu usuário" required>
    <br><br>
    <label for="senha">SENHA: </label>
    <input type="password" name="password" id="senha" placeholder="Informe sua senha" required>
    <br><br>
    <input type="submit" value="Entrar">
</form><br>

<ul>
    <li><a href="cadastrar-usuario-form.php">Cadastrar usuário</a></li>
    <li><a href="deu-ruim.php">Esqueceu sua senha?</a></li>
</ul>

<?php include_once "footer.php"; ?>