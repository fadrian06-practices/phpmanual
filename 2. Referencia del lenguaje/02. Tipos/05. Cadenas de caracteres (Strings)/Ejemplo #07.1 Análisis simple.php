<?php

$jugo = 'manzana';

echo "Él tomó algo de jugo de $jugo." . PHP_EOL;

/* Inválido. "s" es un carácter válido para un nombre de variable, pero la variable
es $jugo.

El @ es para suprimir el PHP Warning (Advertencia) de variable indefinida $jugos

Salida: Él tomó algo de jugo hecho de . */
echo @"Él tomó algo de jugo hecho de $jugos." . PHP_EOL;

// Válido. Explícitamente especifica el final del nombre de la variable encerrándolo entre llaves:
// echo "Él tomó algo de jugo hecho de ${jugo}s."; // OBSOLETO y No RECOMENDADO
echo "Él tomó algo de jugo hecho de {$jugo}s."; // RECOMENDADO con el $ dentro de la {
