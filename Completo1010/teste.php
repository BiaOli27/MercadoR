<?php
// Configuração do banco de dados
$host = "localhost";
$username = "root";
$password = "";
$database = "leila";

// Conexão com o banco de dados
$conn = new mysqli($host, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Dados a serem inseridos
  $nmteste = $_POST['nmteste'];     
  $cpfteste = $_POST['cpfteste'];
  $telteste = $_POST['telteste'];

// Consulta SQL para inserção de dados
$sql = "INSERT INTO teste (nmteste, cpfteste, telteste) VALUES ('$nmteste','$cpfteste',$telteste)";

// Preparar a consulta
$stmt = $conn->prepare($sql);

if ($stmt) {
    // Vincular parâmetros
    $stmt->bind_param('sss', $nmteste, $cpfteste, $telteste);

    // Executar a consulta
    if ($stmt->execute()) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $stmt->error;
    }

    // Fechar a consulta
    $stmt->close();
} else {
    echo "Erro na preparação da consulta: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
