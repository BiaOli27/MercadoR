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
  $nmfuncionario = $_POST['nmfuncionario'];     
  $cpffuncionario = $_POST['cpffuncionario'];
  $telfuncionario = $_POST['telfuncionario'];

$sql_query = "INSERT INTO funcionario (nmfuncionario, cpffuncionario, telfuncionario) VALUES ('$nmfuncionario','$cpffuncionario',$telfuncionario)";
if(mysqli_query($conn,$sql_query))
{
    echo "funcionario cadastrado com sucesso!";
}
else
{
    echo "error" . $sql . "". mysqli_error($conn);
}
mysqli_close($conn);
}
?>



 
    