<?php

class Pessoa{

    public $nome = "Raskonikov";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){

        echo $this->nome. "<br/>";
        echo $this->idade. "<br/>";
        echo $this->senha. "<br/>";
        
    }



}

class Programador extends Pessoa { // herdeiro da classe pessoa, herda tudo menos os atributos e metodos private

    

}

$objeto = new Programador();

//echo $objeto->nome . "<br/>";
//echo $objeto->idade . "<br/>"; // apenas métodos e herdeiros podem enchergar dados protected
//echo $objeto->senha . "<br/>"; // um nível a mais de proteção se comparado ao protected, nem herdeiros podem enchergar, apenas a propria classe

$objeto->verDados();


?>