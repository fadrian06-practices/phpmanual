<?php

/*===============================
=            IGNORAR            =
===============================*/
header('Content-Type: text/plain');

function volcarVariable(string $variable): void {
  echo json_encode([
    "\$$variable" => $GLOBALS[$variable],
    'tipo' => gettype($GLOBALS[$variable])
  ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . PHP_EOL;
}

# ================================
# =           EJEMPLOS           =
# ================================
$un_bool = true;   // un valor booleano
$un_str  = "foo";  // una cadena de caracteres
$un_str2 = 'foo';  // una cadena de caracteres
$un_int  = 12;     // un número entero

volcarVariable('un_bool'); // imprime: boolean
volcarVariable('un_str');  // imprime: string

// Si este valor es un entero, incrementarlo en cuatro
if (is_int($un_int)) {
  $un_int += 4;
}

// Si $un_bool es una cadena, imprimirla
// (no imprime nada)
if (is_string($un_bool)) {
  echo "Cadena: $un_bool";
}
