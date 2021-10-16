<?php

$idade = 16;
//$nome = "Kayc";
$numeroDePessoas = 1;

echo "Só pode entrar se tiver a partir de 18 anos ou a partir de ";
echo "16 anos acompanhado".PHP_EOL;
//if ($idade > 18) || ($idade == 18)
//if ($idade > 18) or ($idade == 18)
//if ($idade > 18) and ($nome == Kayc)
if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho!";
}

else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a). Pode entrar!";
} else {
    echo "Você tem $idade anos e não está acompanhado(a). Não pode entrar!";
    }

echo PHP_EOL;
echo "Adeus!";