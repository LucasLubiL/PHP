<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>
</head>
<body>

    <?php
       
       session_start();
       //include_once("visao/topo.php");

       if(isset($_GET["fun"])){

            $fun = $_GET["fun"];

            if($fun == "cadastrar"){

                include_once("controle/CadastrarContato.php");
                new CadastrarContato();

            }elseif($fun == "alterar"){
        
                include_once("controle/AlterarContato_class.php");
                new AlterarContato();

            }elseif($fun == "excluir"){
        
                include_once("controle/ExcluirContato_class.php");
                new ExcluirContato();

            }elseif($fun == "listar"){
        
                include_once("controle/listarContato_class.php");
                new listarContato();

            }elseif($fun == "exibir"){
    
                include_once("controle/ExibirContato_class.php");
                new ExibirContato();

            }else{
    
                include_once("controle/listarContato_class.php");
                new listarContato();

            }

        }else{
    
            include_once("controle/listarContato_class.php");
            new listarContato();

        }

    ?>

</body>
</html>