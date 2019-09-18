<?php

function ola($texto = "mundo",$periodo = "Bom dia")
{
    return "Olá $texto!<br> $periodo <br>";

}

echo ola();
echo ola("");
echo ola("gabriel","boa noite");
echo ola("familia","boa tarde");

?>