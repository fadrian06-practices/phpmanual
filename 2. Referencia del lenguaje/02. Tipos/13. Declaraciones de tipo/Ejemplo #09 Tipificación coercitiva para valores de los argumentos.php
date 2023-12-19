<?php

function suma(int $a, int $b) {
  return $a + $b;
}

var_dump(suma(1, 2));

// Estos serán forzados a números enteros: ¡observe el resultado a continuación!
// Es obsoleto la conversión implícita float -> int con pérdida de presición
var_dump(@suma(1.5, 2.5));
