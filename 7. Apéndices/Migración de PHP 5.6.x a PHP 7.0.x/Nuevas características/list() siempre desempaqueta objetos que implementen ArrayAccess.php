Anteriormente, no se garantizaba que list() operase correctamente con
objetos que implementasen ArrayAccess. Esto ha sido arreglado.

<?php

error_reporting(~E_DEPRECATED);

class ListaPersonalizada implements ArrayAccess {
  private $contenedor = [];

  public function offsetSet($offset, $value) {
    if ($offset === null) {
      $this->contenedor[] = $value;
    } else {
      $this->contenedor[$offset] = $value;
    }
  }

  public function offsetExists($offset): bool {
    return isset($this->contenedor[$offset]);
  }

  public function offsetUnset($offset) {
    unset($this->contenedor[$offset]);
  }

  public function offsetGet($offset) {
    return $this->contenedor[$offset] ?? null;
  }
}

$listaPersonalizada = new ListaPersonalizada();
$listaPersonalizada[0] = 'manzana';
$listaPersonalizada[1] = 'banana';

list($fruta1, $fruta2) = $listaPersonalizada;

echo $fruta1, PHP_EOL; // Salida: manzana
echo $fruta2, PHP_EOL; // Salida: banana
