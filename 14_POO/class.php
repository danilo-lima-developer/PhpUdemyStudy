<?php // Objeto : É uma variável que representa uma classe. Ex: $sql = new Sql(); // Damos o nome de instância, é quando uma variável representa/instância uma classe.

class Pessoa {

    public $nome; // atributo

    public function falar(){ // método

        return "O meu nome é " .$this->nome;
        
    }

}

$danilo = new Pessoa();
$danilo->nome ="Danilo Lima";
echo $danilo->falar();  

echo "</br>"
;
$damiana = new Pessoa();
$damiana->nome = "Damiana";
echo $damiana->falar();


?>