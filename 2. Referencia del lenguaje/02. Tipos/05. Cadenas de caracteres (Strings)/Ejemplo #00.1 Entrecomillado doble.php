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
echo "Esto es una cadena sencilla";

saltoDeLinea(2);

/*
Los saltos de linea sin \n se convertirán en espacios en blanco en el
navegador, mientras que en la consola se convertirán \n implícitos:

Salida en el navegador:
-----------------------
También se pueden incluir nuevas líneas en un string de esta forma, ya que es correcto hacerlo así

Salida en la consola:
---------------------
También se pueden incluir nuevas líneas en
un string de esta forma, ya que es
correcto hacerlo así
 */
echo "También se pueden incluir nuevas líneas en
un string de esta forma, ya que es
correcto hacerlo así";

saltoDeLinea(2);

// Resultado: Arnold una vez dijo: "I'll be back"
echo "Arnold una vez dijo: I'll be back";

saltoDeLinea(2);

// Resultado: Ha borrado C:\*.*?
echo "Ha borrado C:\\*.*?";

saltoDeLinea(2);

// Resultado: Ha borrado C:\*.*?
// El \ sólo es necesario escaparlo cuando necesitas \\ ""
echo "Ha borrado C:\*.*?";

saltoDeLinea(2);

// Resultado: Esto se expandirá:
// una nueva línea
echo "Esto se expandirá: \n una nueva línea";

saltoDeLinea(2);

$si = '{Valor de $si}';
$expandirán = '{Valor de $expandirán}';

// Resultado: Las variables $si se $expandirán
echo "Las variables $si se $expandirán";

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
