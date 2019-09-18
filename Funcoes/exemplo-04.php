<?php

function ola()
{
    $argumentos = func_get_args();
    
    return $argumentos[1];

}

var_dump(ola("Bom dia",10));

?>