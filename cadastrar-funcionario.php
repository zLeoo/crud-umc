<?php

    include "database.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO funcionarios (nome, email, telefone)
        VALUES ('$nome', '$email', '$telefone')";

    if (mysqli_query($conexao, $sql)) {
        header("Location: success-funcionario.php");
    } else {
        echo "Erro ao cadastrar funcionário";
    }
