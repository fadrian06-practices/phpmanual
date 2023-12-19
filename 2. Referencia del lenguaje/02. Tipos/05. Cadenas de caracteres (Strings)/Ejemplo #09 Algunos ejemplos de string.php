<?php

# ===============================
# =           IGNORAR           =
# ===============================
header('Content-Type: text/plain');

function variablesAJSON(string ...$variables): string {
  $variablesFormateadas = [];

  foreach ($variables as $variable) {
    $variablesFormateadas["\$$variable"] = $GLOBALS[$variable];
  }

  return json_encode(
    $variablesFormateadas,
    JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
  );
}

# ================================
# =           EJEMPLOS           =
# ================================
// Obtener el primer carácter de un string
$str = 'Esto es una prueba.';
$primero = $str[0];

// Obtener el tercer carácter de un string
$tercero = $str[2];

echo variablesAJSON('str', 'primero', 'tercero') . PHP_EOL;

// Obtener el último carácter de un string
$str = 'Esto sigue siendo una prueba.';
$último = $str[strlen($str) - 1];

echo variablesAJSON('str', 'último') . PHP_EOL;

// -1 -> último, -2 -> penúltimo, ...
$último = $str[-1];

echo variablesAJSON('str', 'último') . PHP_EOL;

// Modificar el último carácter de un string
$str = 'Mira el mar';
$strOriginal = $str;
$str[strlen($str) - 1] = 'l';

echo variablesAJSON('strOriginal', 'str');
