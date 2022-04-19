<?php include_once "header.php";?>

<h2>Cadastrar usuários</h2>
<br>
<form action="cadastrar-usuario.php" method="POST">
    <label for="usuario">Login: </label>
    <input type="text" name="login" placeholder="Insira o login" required><br/><br/>

    <label for="senha">Senha: </label>
    <input type="password" name="senha" placeholder="Insira o senha" required><br/><br/>

    <label for="perfil">Perfil: </label>
    <select name="perfil" id="perfil">
        <option value="cliente">Cliente</option>
        <option value="admin">Adminstrador</option>
    </select><br/><br/>

    <input type="submit" value="Enviar">
</form>

<ul>
    <li><a href="index.php">Voltar para tela de login</a></li>
</ul>

<?php include_once "footer.php";?>