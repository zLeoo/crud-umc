<?php
    // Incluir arquivo de conexão com banco de dados
    include "database.php";

    // Iniciar sessão
    session_start();

    // Recuperar os dados do formulário
    $login = $_POST['login'];
    $senha = $_POST['password'];

    // Verificar se os campos estão vazios
    if (empty($login)) {
        $_SESSION['mensagem'] = "Preencha o campo login!";
        header("Location: index.php");
        
    } elseif (empty($senha)) {
        $_SESSION['mensagem'] = "Preencha o campo senha!";
        header("Location: index.php");

    } else {
        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
        $resultado = mysqli_query($conexao, $sql);
        $dados = mysqli_fetch_assoc($resultado);
        
        if ($dados['login'] == $login and $dados['senha'] == $senha) {
            $usuario = array("login" => $dados['login'], "senha" => $dados['senha'], "perfil" => $dados['perfil']);
            $_SESSION['usuario'] = $usuario;
            header("Location: painel.php");
            
        } else {
            $_SESSION['mensagem'] = "Login e/ou senha inválido!";
            header("Location: index.php");
        }
    }
?>