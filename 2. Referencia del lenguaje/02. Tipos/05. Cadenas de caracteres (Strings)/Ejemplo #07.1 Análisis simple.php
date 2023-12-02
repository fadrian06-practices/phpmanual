<?php

$jugo = "manzana";

echo "Él tomó algo de jugo de $jugo." . PHP_EOL;
// Inválido. "s" es un carácter válido para un nombre de variable, pero la variable es $jugo.
echo "Él tomó algo de jugo hecho de $jugos.";
// Válido. Explícitamente especifica el final del nombre de la variable encerrándolo entre llaves:
echo "Él tomó algo de jugo hecho de ${jugo}s.";
