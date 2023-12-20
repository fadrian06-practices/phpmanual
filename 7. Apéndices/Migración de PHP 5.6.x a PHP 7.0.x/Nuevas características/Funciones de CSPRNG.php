Se han añadido dos nuevas funciones para generar números enteros y
cadenas de caractéres criptográficamente seguros de una forma
multiplataforma: random_bytes() y random_int().

<?php

print_r([
  'random_bytes()' => random_bytes(10),
  'random_int()' => random_int(1, 10)
]);
