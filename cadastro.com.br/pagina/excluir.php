<?php
$id=$_GET["id"];

include("../conexao/conexao.php");
mysqli_query($con,"DELETE FROM cadastro where id=$id");
echo "Cadastro excluido com sucesso";

mysqli_close($con);

?>
<br><br>
<a href="../index.php">Voltar para pagina incial</a>
