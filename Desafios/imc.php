<?php

$altura = 1.80;
$peso = 100;
$imc = $peso / $altura ** 2;

if ($imc < 18.5) {
    echo "Você possui $imc de IMC, logo, está abaixo do peso ideal";
}
if ($imc >= 25 && $imc <= 30) {
    echo "Você possui $imc de IMC, logo, está com sobrepeso";
}
if ($imc > 30) {
    echo "Você possui $imc de IMC, logo, está obeso.";
}
if ($imc >= 18.5 && $imc <= 25) {
    echo "Você possui $imc de IMC, logo, está no peso ideal";
}