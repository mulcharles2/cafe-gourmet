<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafe_gourmet";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checando a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
