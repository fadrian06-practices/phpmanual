<?php

function pruebaReturn(): ?string {
  return 'elePHPant';
}

var_dump(pruebaReturn()); // string(10) "elePHPant"

function pruebaReturn2(): ?string {
  return null;
}

var_dump(pruebaReturn2()); // NULL

function prueba(?string $name) {
  var_dump($name);
}

prueba('elePHPant'); // string(10) "elePHPant"
prueba(null); // NULL

// Uncaught Error: Too few arguments to function prueba(), 0 passed in...
prueba();
