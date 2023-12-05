<?php
$nome=$_GET["nome"];
$sexo=$_GET["sexo"];
$endereco=$_GET["endereco"];
$telefone=$_GET["telefone"];
$cidade=$_GET["cidade"];
$email=$_GET["email"];

include("../conexao/conexao.php");

$result=mysqli_query($con,"INSERT INTO cadastro(nome,sexo,endereco,telefone,cidade,email) 
values ('$nome','$sexo','$endereco','$telefone','$cidade','$email')");

mysqli_close($con);
echo "Inserido com sucesso";
?>

<a href="../index.php">Pagina principal</a>