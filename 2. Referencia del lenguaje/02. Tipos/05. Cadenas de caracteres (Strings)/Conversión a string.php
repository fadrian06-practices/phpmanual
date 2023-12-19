<?php

header('Content-Type: text/plain');

function convertirACadena(mixed $valor): string {
  return var_export(@(string) $valor, true);
}

class Foo {
  function __toString(): string {
    return sprintf('Hola desde %s:%d', __METHOD__, __LINE__);
  }
}

echo '(string) true     --> ' . convertirACadena(true) . PHP_EOL;
echo '(string) false    --> ' . convertirACadena(false) . PHP_EOL;
echo '(string) 1        --> ' . convertirACadena(1) . PHP_EOL;
echo '(string) -1       --> ' . convertirACadena(-1) . PHP_EOL;
echo '(string) 2e3      --> ' . convertirACadena(2e3) . PHP_EOL;
echo '(string) 2e-4     --> ' . convertirACadena(2e-4) . PHP_EOL;
echo '(string) 2e-5     --> ' . convertirACadena(2e-5) . PHP_EOL;
echo '(string) 4.1E+6   --> ' . convertirACadena(4.1E+6) . PHP_EOL;
echo '(string) 4.1e-6   --> ' . convertirACadena(4.1E-6) . PHP_EOL;
echo '(string) 0b1101   --> ' . convertirACadena(0b1101) . PHP_EOL;
echo '(string) 01173    --> ' . convertirACadena(01173) . PHP_EOL;
echo '(string) 0xf12020 --> ' . convertirACadena(0xf12020) . PHP_EOL;
echo '(string) []       --> ' . convertirACadena([]) . PHP_EOL;
echo '(string) resource --> ' . convertirACadena(fopen(__FILE__, 'r')) . PHP_EOL;
echo '(string) null     --> ' . convertirACadena(null) . PHP_EOL;
echo "(string) object   --> 'Object' en PHP 4, Error::class en PHP >= 5" . str_repeat(PHP_EOL, 2);
echo '(string) get_class(new stdClass) --> ' . get_class(new stdClass) . PHP_EOL;
echo '(string) (new stdClass)::class   --> ' . (new stdClass)::class . PHP_EOL;
echo '(string) ["foo" => "bar"]["foo"] --> ' . convertirACadena(['foo' => 'bar']['foo']) . PHP_EOL;
echo '(string) ["foo" => "bar"]["bar"] --> ' . convertirACadena(@['foo' => 'bar']['bar']) . PHP_EOL;
echo '(string) $object con un método __toString --> ' . (new Foo) . PHP_EOL;
echo '(string) get_resource_type(fopen(...))    --> ' . get_resource_type(fopen(__FILE__, 'r')) . PHP_EOL;
