<?php
$id=$_GET["id"];
$nome=$_GET["nome"];
$sexo=$_GET["sexo"];
$endereco=$_GET["endereco"];
$telefone=$_GET["telefone"];
$cidade=$_GET["cidade"];
$email=$_GET["email"];

include("../conexao/conexao.php");

mysqli_query($con,"UPDATE cadastro
                    SET nome='$nome',sexo='$sexo',endereco='$endereco',telefone=$telefone,cidade='$cidade',email='$email' 
                    where id=$id");

echo "Alterado com sucesso";

mysqli_close($con);
?>

<a href="../index.php">Pagina principal</a>