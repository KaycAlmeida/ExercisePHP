<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

// echo count ($idadeList);

for ($i = 0; $i < 7; $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

$nomes = array("João","Maria","Pedro","Ana");

for($indice=0; $indice<count($nomes); $indice++){
    echo $nomes[$indice].PHP_EOL;}