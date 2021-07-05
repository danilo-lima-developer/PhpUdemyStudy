<?php

interface Veiculo { // utilizamos interface para impor ao desenvolver alguns metodos e atributos que desem ser seguidos no codigo, como se fosse um script

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {

    public function acelerar($velocidade){

        echo "o Veiculo acelerou até " . $velocidade ."km/h";

    }

    public function frenar($velocidade){

        echo "O veiculo frenou até" . $velocidade . "km/h";

    }

    public function trocarMarcha($marcha){

        echo "O veiculo engatou a marcha " . $marcha;

    }

}

class Delray extends Automovel {

    public function empurrar(){

        

    }

}
//$carro = new Automovel(); // não pode, pois não podemos estanciar uma classe abstrata
$carro = new Delray();


$carro->acelerar(200);



?>