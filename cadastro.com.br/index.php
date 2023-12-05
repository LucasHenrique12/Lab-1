<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "conexao/conexao.php";
    $result=mysqli_query($con,"SELECT * FROM cadastro");
    $noticia=mysqli_query($con,"SELECT * FROM noticia");
    ?>


    <h1>Listar Clientes</h1>

    <table border='1'>
        <tr>
            <td>Nome</td>
            <td>Sexo</td>
            <td>telefone</td>
            <td>ENDEREÇO</td>
            <td>CIDADE</td>
            <td>EMAIL</td>
        </tr>

        <tr>
            <?php
            while($row = mysqli_fetch_array($result)){?>
                
            <td><?= $row["nome"];?></td>
            <td><?= $row["sexo"];?></td>
            <td><?= $row["telefone"];?></td>
            <td><?= $row["endereco"];?></td>
            <td><?= $row["cidade"];?></td>
            <td><?= $row["email"];?></td>
            <td><a href="pagina/excluir.php?id=<?=$row["id"]; ?>">excluir</a></td>
            <td><a href="pagina/alterar.php?id=<?=$row["id"]; ?>">alterar</a></td>
            </tr>
        <?php } ?>
        
    </table>
    <a href="pagina/inserir.php">------Inserir elementos-----</a>
    <br><br>

    <?php          
    while($row = mysqli_fetch_array($noticia)){?>
    <?=$row["titulo"];?>
    <?=$row["texto"];?>
   <img src="imagem/<?=$row["imagem"];?>">

    
    <?php } ?>
</body>
</html>