<?php

// == es un operador que comprueba la
// igualdad y devuelve un booleano
if ($accion == "mostrar_version") {
  echo "La versión es 1.23";
}

// esto no es necesario...
if ($mostrar_separadores == true) {
  echo "<hr>\n";
}

// ...porque se puede escribir simplemente:
if ($mostrar_separadores) {
  echo "<hr>\n";
}
