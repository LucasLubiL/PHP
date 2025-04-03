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

        public function alterar($cont){
            try{

                $stmt = $this->con->prepare("UPDATE contato SET nome=:nome,
                                            email=:email,
                                            telefone=:telefone
                                            WHERE id=:id");

                //ligamos as ancoras aos valres de Contato
                $stmt->bindValue(":nome", $cont->getNome());
                $stmt->bindValue(":email", $cont->getEmail());
                $stmt->bindValue(":telefone", $cont->getTelefone());
                $stmt->bindValue(":id", $cont->getId());

                $this->con->beginTransaction();
                $stmt->execute(); //execução do sql;
                $this->con->commit();
                /*$this->con->close();
                $this->con = null;*/

            }catch(PDOException $ex){
                echo "Vai ser burro so". $ex->getMessage();
            } 
        }

        public function excluir($cont){

             try{

                $num = $this->con->exec("DELETE FROM conato WHERE id = " . $cont->getId());
                //numero de linhas afetadas pelo comando;

                if($num >= 1){
                    return 1;
                }else{
                    return 0;
                }

             }catch(PDOException $ex){
                echo "Erro: " . $ex->getMessage();
             }

        }


        public function listar($query = null){

            try{

                if($query == null){
                    $dados = $this->con->query("SELECT * FROM contato");
                }else{
                    $dados = $this->con->query($query);
                }

                $lista = array();
                foreach($dados as $linha){

                    $c = new Contato();
                    $c->setId($linha["id"]);
                    $c->setNome($linha["nome"]);
                    $c->setTelefone($linha["telefone"]);
                    $c->setEmail($linha["email"]);
                    $lista[] = $c;

                }

                return $lista;

            }catch(PDOException $ex){
                echo "Erro ao listar contatos" . $ex->getMessage();
            }


        }

        public function exibir($id){

            try{

                
                $sql = $this->con->query("SELECT * FROM contato WHERE id = :id ");
                
                $sql->bindValue(":id", $id);

                $dados = $this->con->query($sql);
                
                if($dados){

                    $c = new Contato();

                    $c->setId($dados["id"]);
                    $c->setNome($dados["nome"]);
                    $c->setTelefone($dados["telefone"]);
                    $c->setEmail($dados["email"]);

                    return $c;

                }

            }catch(PDOException $ex){

                echo "Erro ao exibir este contato" . $ex->getMessage();

            }

        }

    }

?>