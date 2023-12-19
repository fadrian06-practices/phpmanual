<?php

declare(strict_types=1);
namespace TipificacionEstrictaDeArgumentos;

function suma(int $a, int $b) {
  return $a + $b;
}

var_dump(suma(1, 2));
var_dump(suma(1.5, 2.5));
