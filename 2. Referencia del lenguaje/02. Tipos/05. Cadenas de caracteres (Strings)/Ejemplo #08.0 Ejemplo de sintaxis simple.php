<?php

$jugos = ['manzana', 'naranja', 'koolaid1' => 'púrpura'];

// Salida: Él tomó algo de jugo de manzana.
echo "Él tomó algo de jugo de $jugos[0]." . PHP_EOL;

// Salida: Él tomó algo de jugo de naranja.
echo "Él tomó algo de jugo de $jugos[1]." . PHP_EOL;

/* Válido pero no recomendado, funciona porque sin {} no se puede interpolar
constantes, por lo que php asume que quieres acceder a la clave koolaid1 del
arreglo $jugos

  NO RECOMENDADO: $jugos[koolaid1]
  RECOMENDADO: {$jugos['koolaid1']}

Salida: Él tomó algo de jugo púrpura. */
echo "Él tomó algo de jugo $jugos[koolaid1]." . PHP_EOL;

class Persona {
  public $john = 'John Smith';
  public $jane = 'Jane Smith';
  public $robert = 'Robert Paulsen';

  public $smith = 'Smith';
}

$persona = new Persona;

// Salida: John Smith tomó algo de jugo de manzana.
echo "$persona->john tomó algo de jugo de $jugos[0]." . PHP_EOL;

// Salida: John Smith entonces dijo hola a Jane Smith.
echo "$persona->john entonces dijo hola a $persona->jane." . PHP_EOL;

// Salida: La esposa de John Smith saludó a Robert Paulsen.
echo "La esposa de $persona->john saludó a $persona->robert." . PHP_EOL;

/* Inválido. "s" es un carácter válido para un nombre de propiedad, pero la
propiedad es ->smith.

El @ es para suprimir el PHP Warning (Advertencia) de propiedad indefinida ->smiths

Salida: Robert Paulsen saludó a los dos . */
echo @"$persona->robert saludó a los dos $persona->smiths."; // No funcionará

// Salida: Robert Paulsen saludó a los dos Smiths.
echo "$persona->robert saludó a los dos {$persona->smith}s."; // Funcionará
