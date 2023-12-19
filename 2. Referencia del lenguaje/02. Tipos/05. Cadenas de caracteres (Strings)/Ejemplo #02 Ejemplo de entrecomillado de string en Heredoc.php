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
Los saltos de linea sin \n se convertirán en espacios en blanco en el
navegador, mientras que en la consola se convertirán \n implícitos:

Salida en el navegador:
-----------------------
Ejemplo de una cadena expandida en varias líneas empleando la sintaxis heredoc.

Salida en la consola:
---------------------
Ejemplo de una cadena
expandida en varias líneas
empleando la sintaxis heredoc.
 */
$str = <<<EOD
Ejemplo de una cadena
expandida en varias líneas
empleando la sintaxis heredoc.
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
Mi nombre es "MiNombre". Estoy escribiendo un poco de Foo. Ahora, estoy escribiendo un poco de Bar2. Esto debería mostrar una 'A' mayúscula: A

Salida en la consola:
---------------------
Mi nombre es "MiNombre". Estoy escribiendo un poco de Foo.
Ahora, estoy escribiendo un poco de Bar2.
Esto debería mostrar una 'A' mayúscula: A
 */
echo <<<EOT
Mi nombre es "$nombre". Estoy escribiendo un poco de $foo->foo.
Ahora, estoy escribiendo un poco de {$foo->bar[1]}.
Esto debería mostrar una 'A' mayúscula: \x41
EOT;

/*
Dentro de HEREDOC y comillas dobles se puede interpolar:

- Variables:
    "$variable"

- Propiedades escalares de un objeto:
    "$objeto->propiedad"
    "{$objeto->propiedad}"

- Propiedades vectoriales de un objeto:
    "{$objeto->propiedad['clave']}"
    "{$objeto->propiedad[0]}"

- Propiedades estáticas de un objeto:
    "{$objeto::$propiedad}"
    "{$objeto::$propiedad[0]}"
    "{$objeto::$propiedad['clave']}"

- Invocación de métodos de instancia:
    "{$objeto->metodo(...parametros)}"

- Invocación de métodos estáticos sobre una instancia:
    "{$objeto::metodo(...parametros)}"

- Constantes de clase sobre una instancia:
    "{$objeto::CONSTANTE}"

- Usar una variable que almacene un callable-string o un Closure para invocar
funciones
    $funcion = 'miFuncion';
    $cierre = Closure::fromCallable('miFuncion')
    $cierre = sumar(...) // <-- a partir de PHP >= 8.1

    "{$funcion(...parametros)}"
    {$cierre(...parametros)}

- Usar una variable que almacene un class-string para acceder a propiedades
estáticas, constantes de clase e invocar métodos estáticos:
    $clase = 'MiClase';

    "{$clase::$propiedad}"
    "{$clase::CONSTANTE}"
    "{$clase::metodo(...parametros)}"
 */
