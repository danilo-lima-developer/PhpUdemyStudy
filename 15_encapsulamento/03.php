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

    public function verDados(){

        echo get_class($this). "<br/>"; // mostra a origem do método

        echo $this->nome. "<br/>";
        echo $this->idade. "<br/>";
        echo $this->senha. "<br/>"; // um erro devido a esse atributo estar como private na classse pai.
        
    }
    

}

$objeto = new Programador();

//echo $objeto->nome . "<br/>";
//echo $objeto->idade . "<br/>"; // apenas métodos e herdeiros podem enchergar dados protected
//echo $objeto->senha . "<br/>"; // um nível a mais de proteção se comparado ao protected, nem herdeiros podem enchergar, apenas a propria classe

$objeto->verDados();


?>