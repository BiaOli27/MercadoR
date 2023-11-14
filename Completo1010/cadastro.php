
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
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $bairro = $_POST['bairro'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $sql_query = "INSERT INTO cadastro (nome, email, telefone, endereco, cidade, estado, bairro, login, senha) VALUES ('$nome','$email','$telefone','$endereco','$cidade','$estado','$bairro','$login','$senha')";
     if(mysqli_query($conn,$sql_query))
     {
         echo "Seu Cadastro Foi Concluído Com Sucesso! ";
     }
     else
     {
        echo "error" . $sql . "". mysqli_error($conn);
     }
     mysqli_close($conn);
    }
    ?>