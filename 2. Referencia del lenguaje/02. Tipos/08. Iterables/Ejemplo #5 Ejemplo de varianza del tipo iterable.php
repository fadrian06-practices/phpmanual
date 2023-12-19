<?php

interface Ejemplo {
  public function metodo(array $array): iterable;
}

class ImplementaciónDeEjemplo implements Ejemplo {
  public function metodo(iterable $iterable): array {
    // Parámetro ampliado y tipo de retorno reducido.
  }
}
