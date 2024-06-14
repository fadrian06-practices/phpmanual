<?php

interface A {
  public function prueba(array $entrada);
}

class B implements A {
  public function prueba($entrada) { // tipo omitido para $entrada
  }
}

