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
/*
NOWDOC lleva comillas simples en el nombre de la etiqueta y se comporta
de la misma manera que texto dentro de comillas simples

Los saltos de linea sin \n se convertirán en espacios en blanco en el
navegador, mientras que en la consola se convertirán \n implícitos:

Salida en el navegador:
-----------------------
Ejemplo de un string expandido en varias líneas empleando la sintaxis nowdoc.

Salida en la consola:
---------------------
Ejemplo de un string
expandido en varias líneas
empleando la sintaxis nowdoc.
 */
echo <<<'EOD'
Ejemplo de un string
expandido en varias líneas
empleando la sintaxis nowdoc.
EOD;

saltoDeLinea(2);

/* Un ejemplo más complejo con propiedades. */
class Foo {
  public $foo = 'Foo';
  public $bar = ['Bar1', 'Bar2', 'Bar3'];
}

$foo = new Foo;
$nombre = 'MiNombre';

/*
Salida en el navegador:
-----------------------
Mi nombre es "$nombre". Estoy escribiendo un poco de $foo->foo. Ahora, estoy escribiendo un poco de {$foo->bar[1]}. Esto debería mostrar una 'A' mayúscula: \x41

Salida en la consola:
---------------------
Mi nombre es "$nombre". Estoy escribiendo un poco de $foo->foo.
Ahora, estoy escribiendo un poco de {$foo->bar[1]}.
Esto debería mostrar una 'A' mayúscula: \x41
 */
echo <<<'EOT'
Mi nombre es "$nombre". Estoy escribiendo un poco de $foo->foo.
Ahora, estoy escribiendo un poco de {$foo->bar[1]}.
Esto debería mostrar una 'A' mayúscula: \x41
EOT;
