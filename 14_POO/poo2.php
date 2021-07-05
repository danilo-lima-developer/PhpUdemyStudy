<?php

class Carro{

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){

        return $this->modelo;

    }

    public function setModelo($modelo){ // o parâmetro $modelo poderia ser qualquer outro nome

        $this->modelo = $modelo;

    }

    public function getMotor():float{ // :float - diz que o retorno será um float

        return $this->motor;

    }

    public function setMotor($motor){

        $this->motor = $motor;

    }

    public function getAno():int{ // :int - diz que o retorno será um valro inteiro

        return $this->ano;

    }

    public function setAno($ano){

        $this->ano = $ano;

    }

    public function exibir(){

        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );

    }

}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2002");

print_r($gol->exibir());
var_dump($gol->exibir());
?>