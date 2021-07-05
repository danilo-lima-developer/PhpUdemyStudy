<?php

abstract class Animal {

    public function falar(){

        return "Som";

    }

    public function mover(){

        return "Anda";

    }

}

class Cachorro extends Animal {

    public function falar(){

        return "Late";

    }

}

class Gato extends Animal{

    public function falar(){

        return "Mia";
        
    }

}

class Passaro extends Animal{

    public function falar(){

        return "Canta";
        
    }

    public function mover(){

        return "Voa e " . parent::mover(); // o parent herda caracteristicas do metodo pai.
 
    }

}

$pluto = new Cachorro();

echo $pluto->falar() . "<br/>"; // mudou
echo $pluto->mover() . "<br/>";  //herdou


echo "--------------------------<br/>";

$garfield = new Gato();

echo $garfield->falar() . "<br/>"; // mudou
echo $garfield->mover() . "<br/>";  //herdou

echo "--------------------------<br/>";

$ave = new Passaro();

echo $ave->falar() . "<br/>"; // mudou
echo $ave->mover() . "<br/>";  //herdou

?>