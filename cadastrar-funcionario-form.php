<?php include_once "header.php";

    session_start();
    $usuario = $_SESSION['usuario'];

    if ($usuario['perfil'] != "admin") {
        echo "Você não tem permissão de acesso!";
    } else {
    ?>    
        <h2>Cadastrar funcionários</h2>
        <br>
        <form action="cadastrar-funcionario.php" method="POST">
            <label for="funcionario">Nome: </label>
            <input type="text" name="nome" placeholder="Insira o nome" required><br/><br/>

            <label for="funcionario">Email: </label>
            <input type="email" name="email" placeholder="Insira o e-mail" required><br/><br/>

            <label for="funcionario">Telefone: </label>
            <input type="text" name="telefone" placeholder="Insira o telefone" required><br/><br/>

            <input type="submit" value="Enviar">
        </form>
    <?php } ?>

    <ul>
        <li><a href="painel.php">Voltar para o painel</a></li>
        <li><a href="index.php">Voltar para tela de login</a></li>
    </ul>

<?php include_once "footer.php";?>