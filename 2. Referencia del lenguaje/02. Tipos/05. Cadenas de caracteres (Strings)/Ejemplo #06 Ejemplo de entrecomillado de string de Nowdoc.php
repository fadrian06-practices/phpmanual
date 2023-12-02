<?php

$str = <<<'EOD'
Ejemplo de un string
expandido en varias líneas
empleando la sintaxis nowdoc.
EOD;

/* Un ejemplo más complejo con variables. */
class Foo {
  public $foo = 'Foo';
  public $bar = ['Bar1', 'Bar2', 'Bar3'];
}

$foo = new Foo;
$nombre = 'MiNombre';

echo <<<'EOT'
Mi nombre es "$nombre". Estoy escribiendo un poco de $foo->foo.
Ahora, estoy escribiendo un poco de {$foo->bar[1]}.
Esto debería mostrar una 'A' mayúscula: \x41
EOT;
