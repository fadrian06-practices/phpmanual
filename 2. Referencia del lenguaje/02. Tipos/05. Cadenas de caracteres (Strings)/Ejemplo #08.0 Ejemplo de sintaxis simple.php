<?php

$jugos = array("manzana", "naranja", "koolaid1" => "púrpura");

echo "Él tomó algo de jugo de $jugos[0]." . PHP_EOL;
echo "Él tomó algo de jugo de $jugos[1]." . PHP_EOL;
echo "Él tomó algo de jugo $jugos[koolaid1]." . PHP_EOL;

class persona {
  public $john = "John Smith";
  public $jane = "Jane Smith";
  public $robert = "Robert Paulsen";

  public $smith = "Smith";
}

$persona = new persona();

echo "$persona->john tomó algo de jugo de $jugos[0]." . PHP_EOL;
echo "$persona->john entonces dijo hola a $persona->jane." . PHP_EOL;
echo "La esposa de $persona->john saludó a $persona->robert." . PHP_EOL;
// echo "$persona->robert saludó a los dos $persona->smiths."; // No funcionará
echo "$persona->robert saludó a los dos {$persona->smith}s."; // Funcionará
