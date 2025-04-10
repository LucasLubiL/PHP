<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Contatos</title>
</head>
<body>

    <h1> Cadastro Contato </h1>

    <form action = "contato.php?fun=cadastrar" method = "POST" enctype = "multipart/form-data">

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" /><br>

        <label for="email">Email</label>
        <input type="text" id="email" name="email" /><br>

        <label for="tel">Telefone</label>
        <input type="text" id="tel" name="telefone" /><br>

        <input type="submit" name="enviar" value="enviar"/>

    </form>

</body>
</html>