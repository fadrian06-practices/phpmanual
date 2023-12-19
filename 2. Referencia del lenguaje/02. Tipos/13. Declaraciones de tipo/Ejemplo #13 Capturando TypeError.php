<?php

declare(strict_types=1);

namespace CapturandoTypeError;

function suma(int $a, int $b) {
  return $a + $b;
}

try {
  var_dump(suma(1, 2));
  var_dump(suma(1.5, 2.5));
} catch (\TypeError $e) {
  echo 'Error: ', $e->getMessage();
}
