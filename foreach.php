<?php

//echo $conta1['titular']

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345648911 => [
        'titular' => 'Maria',
        'saldo' => 10000],
    12325678910 => [
        'titular' => 'Roberto',
        'saldo' => 300]];

$contasCorrentes[12345678912] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}
// sem indice ele adiciona no próximo(numérico), com
// indíce da chave ele faz o indice que deseja(associativo).