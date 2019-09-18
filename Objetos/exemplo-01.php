<?php
class Pessoa 
{
    public $nome;//atributo

    public function falar()//começo do método
    {
        return "O meu nome é ".$this->nome;




    }//fim do método

}


$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();




?>