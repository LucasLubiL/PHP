<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>
</head>
<body>

    <?php
        /*$conexao = mysql_connect("localhost", "root", "vertrigo");
        mysql_select_db("agenda", $conexao);*/
        $conexao = mysqli_connect("localhost", "root", "vertrigo", "agenda");
        $dados = mysqli_query($conexao, "SELECT * from contato");
    ?>

    <UL>
        <?php
            $i = 1;
            while($usuario = mysqli_fetch_array($dados)){
                echo("<LI> Contato n " . $i . ":" . $usuario["nome"] . "</LI>");
                $i++;
            }
        ?>
    </UL>

</body>
</html>