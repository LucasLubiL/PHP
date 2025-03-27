<?php

    include_once("ConnectionFactory_class.php");//PDO
    include_once("Contato_class.php");//entidade

    class ContatoDAO{

        //DAO - Data Access Object
        //CRUD - Create, Read, Update e Delete
        //operações básicas de banco de dados
            
        public $con = null;//obj recebe conexão

        public function __construct(){
            $conF = new ConnectionFactory();
            $this->con = $conF->getConnection();
        }

        public function cadastrar($cont){
            try{
                $stmt = $this->con->prepare(
                   "INSERT INTO contato(nome, email, telefone)
                   values (:nome, :email, :telefone)"
                );
                

                $stmt->bindValue(":nome", $cont->getNome());
                $stmt->bindValue(":email", $cont->getEmail());
                $stmt->bindValue(":telefone", $cont->getTelefone());

                $stmt->execute();

            }
            catch(PDOException $ex){
                echo"Erro: " . $ex->getMessage();
            }
        }

    }

?>