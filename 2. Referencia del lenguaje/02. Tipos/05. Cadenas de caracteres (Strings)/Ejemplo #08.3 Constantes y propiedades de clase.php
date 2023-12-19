<?php

// Mostrar todos los errores.
error_reporting(E_ALL);

class Cervezas {
  const REFRESCO = 'zarzaparrilla';
  public static $ale = 'ipa';
}

$zarzaparrilla = 'A & W';
$ipa = "Alexander Keith's";

// Funciona; muestra: Me gusta una A & W
echo "Me gusta una {${Cervezas::REFRESCO}}\n";

// También funciona; muestra: Me gusta una Alexander Keith's
echo "Me gusta una {${Cervezas::$ale}}\n";
