<?php

class Prueba {
  public function exponerFuncion() {
    return Closure::fromCallable([$this, 'funcionPrivada']);
  }

  private function funcionPrivada($param) {
    var_dump($param);
  }
}

$funcionPrivada = (new Prueba)->exponerFuncion();
$funcionPrivada('algún valor'); // string(10) "algún valor"
