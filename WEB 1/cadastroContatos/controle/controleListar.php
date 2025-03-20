<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>
</head>
<body>

    <?php
       
        $conexao = mysqli_connect("localhost", "root", "vertrigo", "agenda");
        $dados = mysqli_query($conexao, "SELECT * from contato");

        while($usuario = mysqli_fetch_array($dados)){
            $contatos[] = $usuario["nome"];
        }

    ?>

    
    

</body>
</html>