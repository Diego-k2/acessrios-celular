<?php 

    include "../database.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];

    $sql = "INSERT INTO ethieny_ads_user (nome, email, senha, telefone) VALUES ('$nome', '$email', '$senha', '$telefone')";

    if(mysqli_query($conexao, $sql))
    {
        header("Location: login.php");
    }
    else
    {
        echo "Falha ao cadastrar user";
    }

?>