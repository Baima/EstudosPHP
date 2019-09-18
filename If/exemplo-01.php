<?php

$qualASuaIdade = 25;
$idadeCriança = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCriança)
{
    echo "criança";
}
else if ($qualASuaIdade < $idadeMaior)
{
    echo "Adolescente";
}
else if ($qualASuaIdade < $idadeMelhor)
{
    echo "Adulto";
}
else 
{
    echo "";
}
echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade"




?>
