<?php

header('Content-Type: text/plain');

// Un ejemplo de función de llamada de retorno
function mi_función_de_llamada_de_retorno() {
  echo '¡hola mundo!' . PHP_EOL;
}

// Un ejemplo de método de llamada de retorno
class MiClase {
  static function miMétodoDeLlamadaDeRetorno() {
    echo '¡Hola Mundo!' . PHP_EOL;
  }
}

// Tipo 1: Llamada de retorno simple
call_user_func('mi_función_de_llamada_de_retorno');

// Tipo 2: Llamada a un método de clase estático
// call_user_func(array('MiClase', 'miMétodoDeLlamadaDeRetorno'));
call_user_func([MiClase::class, 'miMétodoDeLlamadaDeRetorno']);

// Tipo 3: Llamada al método de un objeto
$obj = new MiClase;
// call_user_func(array($obj, 'miMétodoDeLlamadaDeRetorno'));
call_user_func([$obj, 'miMétodoDeLlamadaDeRetorno']);

// Tipo 4: Llamada a un método de clase estático (A partir de PHP 5.2.3)
call_user_func('MiClase::miMétodoDeLlamadaDeRetorno');

// Tipo 5: Llamada a un método de clase estático relativo (A partir de PHP 5.3.0)
class A {
  public static function quién() {
    echo "A\n";
  }
}

class B extends A {
  public static function quién() {
    echo "B\n";
  }
}

// OBSOLETO
@call_user_func(array('B', 'parent::quién')); // A

// Los objetos que implementan __invoke se pueden emplear como retrollamadas (desde PHP 5.3)
class C {
  public function __invoke($nombre) {
    echo 'Hola ', $nombre, "\n";
  }
}

$c = new C;
// call_user_func($c, 'PHP!');
$c('PHP!');
