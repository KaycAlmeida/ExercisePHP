<?php

$mapa = [
    'LMS-2312' => [
        'marca' =>'VW',
        'modelo' => 'Golfo'], 
    'LMS-2314' => [
        'marca' => 'Volvo',
        'modelo' => 'S60'],
    'LMS-2315' => [
        'marca' => 'Ferrari',
        'modelo' => 'Portofino'],
    'LMS-2316' => [
        'marca' => 'Hyundai',
        'modelo' => 'HB20'
    ]
    ];

foreach ($mapa as $placa => $mapa) {
    echo $placa . ': ' . $mapa['marca'] . PHP_EOL;
};