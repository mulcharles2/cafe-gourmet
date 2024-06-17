<?php
include 'config.php';

$sql = "SELECT id, nome, email, endereco, telefone FROM Cliente";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. " - Endereço: " . $row["endereco"]. " - Telefone: " . $row["telefone"]. "<br>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>
