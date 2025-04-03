<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>

    <?php
       
        session_start(); //Inicia a sessão área da memória dentro do servidor carrinho de compras, seus dados de conexão qualquer varíavel que voce queira criar

            //include_once("visao/topo.php");
            include_once("controle/ListarContato_class.php");
            $index = new ListarContato();
            //atribuição de responsabilidade     o controle sabe como exibir a lista de contatos

            //include_once("visao/base.php");


    ?>



</body>
</html>