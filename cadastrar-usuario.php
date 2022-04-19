<?php

    include "database.php";

    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $perfil = $_POST['perfil'];

    $sql = "INSERT INTO usuarios (login, senha, perfil)
        VALUES ('$login', '$senha', '$perfil')";

    if (mysqli_query($conexao, $sql)) {
        header("Location: success-usuario.php");
    } else {
        echo "Erro ao cadastrar usuário";
    }
