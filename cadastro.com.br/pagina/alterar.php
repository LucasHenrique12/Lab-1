<?php
$id=$_GET["id"];
include("../conexao/conexao.php");

$result=mysqli_query($con,"SELECT * from  cadastro where id='$id'");
	
?>

<form action="update.php" method="GET">
<?php
while($row=mysqli_fetch_array($result)){?>
<input type="hidden" name="id" value="<?=$row["id"]?>"><br><br>
Nome:<input type="text" name="nome" value="<?=$row["nome"]?>"><br><br>
Sexo: <br>Masculino<input type="radio" name="sexo"  value="M" checked> Feminino<input type="radio" name="sexo" value="F"><br><br>
Telefone:<input type="text" name="telefone" value="<?=$row["telefone"]?>"><br><br>
Endereço:<input type="text" name="endereco" value="<?=$row["endereco"]?>"><br><br>
Cidade:<select name="cidade">
            <option value="salvador" selected>Salvador</option>
            <option value="camacari">Camaçari</option>
            <option value="sfilho">Simôes Filho</option>
            <option value="paripe">Paripe</option>
        </select> <br><br>
email:<input type="text" name="email" value="<?=$row["email"]?>"><br><br>

<input type="submit" value="SALVAR">
<input type="reset" value="LIMPAR">

<?php }
?>
</form>