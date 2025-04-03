<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>
</head>
<body>

    <?php
       
       include_once("modelo/ContatoDAO.php");

       class listarContato{

           public function __construct(){
               $dao = new ContatoDAO();
               $lista = $dao->listar();

               include_once("visao/listaContato.php");

           }

       }

    ?>

</body>
</html>