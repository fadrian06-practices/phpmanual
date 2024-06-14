<?php

abstract class A {
  abstract function prueba(string $s);
}

abstract class B extends A {
  /* sobreescrito - aún manteniendo la contravarianza para parámetros y
  covarianza para el retorno */
  abstract function prueba($s): int;
}
