<?php

$a = 1234; // número decimal
$a = -123; // un número negativo
$a = 0123; // número octal (equivale a 83 decimal)
$a = 0x1A; // número hexadecimal (equivale a 26 decimal)
$a = 0b11111111; // número binario (equivale al 255 decimal)

if (PHP_VERSION_ID > 70400) {
  // Válido a partir de PHP 7.4

  // Separador de miles
  echo 1_234_567_890; // (equivale a 1234567890)
}
