<?php

$frutas = array(
  "frutas"  => array(
    "a" => "naranja",
    "b" => "banana",
    "c" => "manzana"
  ),
  "números" => array(
    1,
    2,
    3,
    4,
    5,
    6
  ),
  "hoyos"   => array(
    "primero",
    5 => "segundo",
    "tercero"
  )
);

// Algunos ejemplos que hacen referencia a los valores del array anterior
echo $frutas["hoyos"][5];    // prints "segundo"
echo $frutas["frutas"]["a"]; // prints "naranja"
unset($frutas["hoyos"][0]);  // remove "primero"

// Crear una nueva array multi-dimensional
$juices["manzana"]["verde"] = "buena";
