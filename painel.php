<?php include_once "header.php";

    session_start();
    $usuario = $_SESSION['usuario'];

    if ($usuario['perfil'] != "admin") {
        echo "Você não tem permissão de acesso!";
    } else {
    ?>    
        <h2>Seja bem-vindo, <?php print($usuario['login'])?></h2>
        <p>Você tem perfil de acesso: <?php print($usuario['perfil'])?></p>

        <h4>Selecione a opção desejada: </h4>
        <br>
        <ul>
            <li><a href="cadastrar-funcionario-form.php">Cadastrar funcionário</a></li>
            <li><a href="listar-funcionarios.php">Listar funcionários</a></li>
        </ul>

    <?php } ?>

<?php include_once "footer.php"; ?>