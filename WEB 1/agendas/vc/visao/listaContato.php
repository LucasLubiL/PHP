<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de contatos</title>
</head>
<body>

    <?php
       
       echo time();
       if(isset($status)){echo "<h2>" .$status. "</h2>";}
       //Se $satatys esta preenchida, imprimir ela

    ?>

    <a href="contato.php?fun=cadastrar">Cadastrar</a>
    <br>

    <table border="1px">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th><img src="visao/img/update.png" width="30px"/></th>
            <th><img src="visao/img/delete.png" width="30px"/></th>
        </tr>
        <!-- primeira linha da tabela com o resultado -->
        
        <?php
        
            foreach($lista as $c){
                echo "<tr>";
                echo "<td>" . $c->getId() . "</td>";
                echo "<td><a href=contato.php?fun=exibir&id=" . $c->getId() . ">" . $c->getNome() . "</a></td>";
                echo "<td>" . $c->getEmail() . "</td>";
                echo "<td>" . $c->getTelefone() . "</td>";
                echo "<td><a herf=contato.php?fun=alterar&id=" .$c->getId() . "><img src='visao/img/update.png' width='30px'/></a></td>";
                echo "<td><a herf=contato.php?fun=excluir&id=" .$c->getId() . "><img src='visao/img/delete.png' width='30px'/></a></td>";
                echo "</tr>";

            }

        ?>
    
    >

</body>
</html>