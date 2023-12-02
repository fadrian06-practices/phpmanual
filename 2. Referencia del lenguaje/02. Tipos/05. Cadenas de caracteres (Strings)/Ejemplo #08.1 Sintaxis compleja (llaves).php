<?php

// Mostrar todos los errores
error_reporting(E_ALL);

$genial = 'fantástico';
$cuadrado = (object) ['width' => rand(1, 10)];
$arr = ['clave' => 'clave', 4 => [3 => 3], 'foo' => 'fooo'];
$obj = (object) ['valores' => [3 => (object) ['nombre' => 'nombre']]];
$nombre = 'nombre';
function getNombre() { return 'nombre'; }
$objeto = new class {
  function getNombre() { return 'nombre'; }
};

// No funciona, muestra: Esto es { fantástico}
echo "Esto es { $genial}";

// Funciona, muestra: Esto es fantástico
echo "Esto es {$genial}";

// Funciona
echo "Este cuadrado tiene {$cuadrado->width}00 centímetros de lado.";

// Funciona, las claves entre comillas sólo funcionan usando la sintaxis de llaves
echo "Esto funciona: {$arr['clave']}";

// Funciona
echo "Esto funciona: {$arr[4][3]}";

// Esto no funciona por la misma razón que $foo[bar] es incorrecto fuera de un string.
// En otras palabras, aún funcionaría, pero solamente porque PHP primero busca una
// constante llamada foo; se emitirá un error de nivel E_NOTICE
// (constante no definida).
// echo "Esto está mal: {$arr[foo][3]}";

// Funciona. Cuando se usan arrays multidimensionales, emplee siempre llaves que delimiten
// a los arrays cuando se encuentre dentro de un string
echo "Esto funciona: {$arr['foo'][3]}";

// Funciona.
echo "Esto funciona: " . $arr['foo'][3];

echo "Esto también funciona: {$obj->valores[3]->nombre}";

echo "Este es el valor de la variable llamada $nombre: {${$nombre}}";

echo "Este es el valor de la variable llamada por el valor devuelto por getNombre(): {${getNombre()}}";

echo "Este es el valor de la variable llamada por el valor devuelto por \$objeto->getNombre(): {${$objeto->getNombre()}}";

//No funciona, muestra: Esto es el valor devuelto por getNombre(): {getNombre()}
echo "Esto es el valor devuelto por getNombre(): {getNombre()}";
