<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO Cliente (nome, email, senha, endereco, telefone) VALUES ('$nome', '$email', '$senha', '$endereco', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo cliente criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
