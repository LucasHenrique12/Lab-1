<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inserir Elementos</h1>
    <form method="GET" action="insert.php" >
        Nome: <input type="text" name="nome" placeholder="Nome aqui" ><br><br>
        Sexo: <br> Masculino<input type="radio" name="sexo"  value="M"> Feminino<input type="radio" name="sexo" value="F"><br><br>
        Telefone: <input type="text" name="telefone" placeholder="telefone aqui"><br><br>
        Endereço: <input type="text" name="endereco" placeholder="Endereço aqui"><br><br>
        Cidade: <select name="cidade">
            <option value="salvador" selected>Salvador</option>
            <option value="camacari">Camaçari</option>
            <option value="sfilho">Simôes Filho</option>
            <option value="paripe">Paripe</option>
        </select> <br><br>
        Email: <input type="email" name="email" placeholder="email aqui"><br><br>
        <input type="submit"> <input type="reset">
    </form>
</body>
</html>