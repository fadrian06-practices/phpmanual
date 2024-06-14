<?php

function intercambiar(&$izquierdo, &$derecho): void {
  if ($izquierdo === $derecho) {
    return;
  }

  $tmp = $izquierdo;
  $izquierdo = $derecho;
  $derecho = $tmp;
}

$a = 1;
$b = 2;
var_dump(intercambiar($a, $b), $a, $b);

/*
El resultado del ejemplo sería:
-------------------------------
null
int(2)
int(1)
 */
