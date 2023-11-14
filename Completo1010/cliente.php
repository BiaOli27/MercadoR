<?php
   $server_name="localhost";
   $username='root';
   $password='';
   $database_name="leila";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
   die("Failed:" . mysqli_connect_error());
}
if(isset($_POST['save'])) 
{
  $nmcliente = $_POST['nmcliente'];     
  $cpfcliente = $_POST['cpfcliente'];
  $telcliente = $_POST['telcliente'];

$sql_query = "INSERT INTO cliente (nmcliente, cpfcliente,telcliente) VALUES ('$nmcliente','$cpfcliente',$telcliente)";
if(mysqli_query($conn,$sql_query))
{
    echo "cliente cadastrado com sucesso!";
}
else
{
    echo "error" . $sql . "". mysqli_error($conn);
}
mysqli_close($conn);
}
?>





<?php
/*
$server_name = "localhost";
$username = 'root';
$password = '';
$database_name = "leila";

// Conectar ao banco de dados
$conn = mysqli_connect($server_name, $username, $password, $database_name);
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

if (isset($_POST['save'])) {
    // Coletar dados do formulário
    //*$nmfuncionario = mysqli_real_escape_string($conn, $_POST['nmfuncionario']);
    $cpffuncionario = mysqli_real_escape_string($conn, $_POST['cpffuncionario']);
    $telfuncionario = mysqli_real_escape_string($conn, $_POST['telfuncionario']);

    // Consulta SQL para inserir um novo funcionário
    $sql_query = "INSERT INTO funcionario (nmfuncionario, cpffuncionario, telfuncionario) VALUES ('$nmfuncionario', '$cpffuncionario', '$telfuncionario')";

    if (mysqli_query($conn, $sql_query)) {
        echo "Funcionário cadastrado com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}/*
?>







 
    