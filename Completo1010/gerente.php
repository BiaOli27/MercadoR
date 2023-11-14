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
  $nmgerente = $_POST['nmgerente'];     
  $cpfgerente = $_POST['cpfgerente'];
  $telgerente = $_POST['telgerente'];

$sql_query = "INSERT INTO gerente (nmgerente, cpfgerente, telgerente) VALUES ('$nmgerente','$cpfgerente',$telgerente)";
if(mysqli_query($conn,$sql_query))
{
    echo "gerente cadastrado com sucesso!";
}
else
{
    echo "error" . $sql . "". mysqli_error($conn);
}
mysqli_close($conn);
}
?>



 
    