<?php
       
    class ConnectionFactory{

        public $con = null;
        public $dbType = null;
        public $host = null;
        public $user = null;
        public $senha = null;
        public $db = null;
        public $persistente = null;

        public function __construct($persistente = false){
            if($persistente != false){
                $this->persistente = true;
            }
        }

        public function getConnection(){

            try{
                
                //Persistent Data Object
                //Persistencia de dados - manipular BD

                $this->con = new PFO(
                    $this->dbType.":host=".$this->host.";dbname=".$this->db,
                    $this->user,
                    $this->senha,
                    array(PDO::ATTR_PERSISTENT => $this->persistente,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
                );
                return $this->con;

            }
            catch(PDOException $ex){

                echo "Erro: " . $ex->getMessage();
            }

        }

        public function close(){
            if($this->con != null){
                $this->con = null;
            }
        }

    }

?>

