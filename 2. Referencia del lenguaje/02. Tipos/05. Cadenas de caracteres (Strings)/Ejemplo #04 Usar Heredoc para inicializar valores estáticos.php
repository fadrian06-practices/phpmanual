<?php

// Variables estáticas
function foo() {
  static $bar = <<<LABEL
  Nada aquí...
  LABEL;
}

// Propiedades/constantes de clase
class foo {
  const BAR = <<<FOOBAR
  Ejemplo de constante
  FOOBAR;

  public $baz = <<<FOOBAR
  Ejemplo de propiedad
  FOOBAR;
}
