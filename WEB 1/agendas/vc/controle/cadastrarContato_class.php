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

       class cadastrarContato{

           public function __construct(){
              
                if(isset($_POST["enviar"])){

                    $c = new Contato();

                    $c->setNome($_POST["nome"]);
                    $c->setEmail($_POST["email"]);
                    $c->setTelefone($_POST["telefone"]);

                    $dao = new ContatoDAO();
                    $dao->cadastrar($c);

                    $status = "Cadastro do Contato " . $c->getNome() . " efetuado com sucesso";

                    $lista = $dao->listar();

                    include_once("visao/listaContato.php");

                }else{

                    include_once("visao/cadastroContato.php");
                    
                }

           }

       }

    ?>

</body>
</html>