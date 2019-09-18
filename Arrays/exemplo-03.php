<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João', 
    'idade'=>20
));

array_push($pessoas, array(
    'nome'=>'Gabriel',
    'idade'=>23

));

print_r($pessoas[0]['nome']);


?>