<?php
   
include_once "funcionario.php";

class Professor extends funcionario{ //subclass
    var $disciplina;
    public function_construct($n, $s, $d){
        parent::__construct($n, $s);
        $this->disciplina = $d;
    }

    public function setDisicplina($disciplina){
        $this->disciplina = $disciplina;

    }
    
    static function teste(){
        return "Metodo de classe";
    }

}

?>



<?php
   
include_once "funcionario.php";

echo("o prof " . $prof->nome . " ministra a disciplina " . $prof->disciplina . " e recebe R$" . $prof->salario . " <br/>");

$prof->aumentoSalario(300);

$prof->setDisciplina("Banco de Dados");

echo("O prof " . $prof->nome . " ministra a disciplina " . $prof->disciplina . " e recebe R$" . $prof->salario . " <br/>");

echo professor::teste();

?>