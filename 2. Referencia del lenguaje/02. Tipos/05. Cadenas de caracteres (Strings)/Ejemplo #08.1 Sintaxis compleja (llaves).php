<?php

# ===============================
# =           IGNORAR           =
# ===============================
function saltoDeLinea(int $veces = 1): void {
  $saltoDeLinea = key_exists('HTTP_USER_AGENT', $_SERVER)
    ? '<br />'
    : "\n";

  echo str_repeat($saltoDeLinea, $veces);
}

# ================================
# =           EJEMPLOS           =
# ================================
// Mostrar todos los errores
error_reporting(E_ALL);

$genial = 'fantástico';

// No funciona, muestra: Esto es { fantástico}
echo "Esto es { $genial}";

saltoDeLinea(2);

// Funciona, muestra: Esto es fantástico
echo "Esto es {$genial}";

saltoDeLinea(2);

$cuadrado = new stdClass;
$cuadrado->width = 1; // Ejemplo de propiedad de instancia

// Funciona
echo "Este cuadrado tiene {$cuadrado->width}00 centímetros de lado.";

saltoDeLinea(2);

$arr = ['clave' => '{valor de $arr["clave"]}'];

// Funciona, las claves entre comillas sólo funcionan usando la sintaxis de llaves
echo "Esto funciona: {$arr['clave']}";

saltoDeLinea(2);

$arr[4][3] = '{valor de $arr[4][3]}';

// Funciona
echo "Esto funciona: {$arr[4][3]}";

saltoDeLinea(2);

// Esto no funciona por la misma razón que $foo[bar] es incorrecto fuera de un string.
// En otras palabras, aún funcionaría, pero solamente porque PHP primero busca una
// constante llamada foo; se emitirá un error de nivel E_NOTICE
// (constante no definida).
// echo "Esto está mal: {$arr[foo][3]}";

$arr['foo'][3] = '{valor de $arr["foo"][3]}';

// Funciona. Cuando se usan arrays multidimensionales, emplee siempre llaves que delimiten
// a los arrays cuando se encuentre dentro de un string
echo "Esto funciona: {$arr['foo'][3]}";

saltoDeLinea(2);

// Funciona.
echo "Esto funciona: " . $arr['foo'][3];

saltoDeLinea(2);

$obj = new stdClass;
$persona = new stdClass;
$persona->nombre = 'John';
$obj->valores = [3 => $persona];

echo "Esto también funciona: {$obj->valores[3]->nombre}";

saltoDeLinea(2);

$nombre = 'otraVariable';
$otraVariable = '{valor de $otraVariable}';

echo "Este es el valor de la variable llamada $nombre: {${$nombre}}";

saltoDeLinea(2);

function getNombre(): string {
  return 'otraVariable';
}

echo "Este es el valor de la variable llamada por el valor devuelto por getNombre(): {${getNombre()}}";

saltoDeLinea(2);

class MiClase {
  function getNombre(): string {
    return 'otraVariable';
  }
}

$objeto = new MiClase;

echo "Este es el valor de la variable llamada por el valor devuelto por \$objeto->getNombre(): {${$objeto->getNombre()}}";

saltoDeLinea(2);

// No funciona, muestra: Esto es el valor devuelto por getNombre(): {getNombre()}
echo "Esto es el valor devuelto por getNombre(): {getNombre()}";

saltoDeLinea(2);

$getNombre = 'getNombre';

// Funciona, muestra: Esto es el valor devuelto por $getNombre(): otraVariable
echo "Esto es el valor devuelto por \$getNombre(): {$getNombre()}";
