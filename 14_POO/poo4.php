<?php
 // método construtor/mágico - Basicamente criar um método que receba todas variáveis, otimizando o código
class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;    

    public function __construct($a, $b, $c){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }

    public function __destruct(){

        var_dump("DESTRUIR");

    }

    public function __toString(){

        return $this->logradouro.", ".$this->numero." - ". $this->cidade;

    }

}

$meuEndereco = new Endereco("Rua Lontra", "550", "Recife");

echo $meuEndereco; // o echo precisa de uma String, ele não consegue imprimir o objeto, por isso inserimos a função __toString

?>