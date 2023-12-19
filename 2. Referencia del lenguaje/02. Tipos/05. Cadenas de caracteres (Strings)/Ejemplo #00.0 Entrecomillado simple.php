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
echo 'Esto es una cadena sencilla';

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
echo 'También se pueden incluir nuevas líneas en
un string de esta forma, ya que es
correcto hacerlo así';

saltoDeLinea(2);

// Resultado: Arnold una vez dijo: "I'll be back"
echo 'Arnold una vez dijo: "I\'ll be back"';

saltoDeLinea(2);

// Resultado: Ha borrado C:\*.*?
echo 'Ha borrado C:\\*.*?';

saltoDeLinea(2);

// Resultado: Ha borrado C:\*.*?
// El \ sólo es necesario escaparlo cuando necesitas \\ ""
echo 'Ha borrado C:\*.*?';

saltoDeLinea(2);

// Resultado: Esto no se expandirá: \n una nueva línea
echo 'Esto no se expandirá: \n una nueva línea';

saltoDeLinea(2);

// Resultado: Las variables $tampoco se $expandirán
echo 'Las variables $tampoco se $expandirán';
