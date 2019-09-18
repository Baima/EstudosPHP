<?php

$anoNascimento = 1990;

$nomeCompleto = "";

$nome1 = "João";

$sobrenome ="Rangel";

$nomeCompleto = $nome1." ".$sobrenome;
echo $nomeCompleto;

exit;


//não pode usar número no começo da variável
/*

============================================

$1nome = "";

*/

echo $nome1;

//pula pra linha de baixo
echo "<br/>";

// unset remove a variável da memória
unset ($nome1);

if (isset($nome1))
{
    echo $nome1;
}



?>