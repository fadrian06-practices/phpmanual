<?php

declare(strict_types=1);

namespace TipificacionEstrictaDeRetorno;

function suma($a, $b): int {
  return $a + $b;
}

var_dump(suma(1, 2));

try {
  var_dump(suma(1, 2.5));
} catch (\TypeError $error) {
  exit($error->getMessage());
}
