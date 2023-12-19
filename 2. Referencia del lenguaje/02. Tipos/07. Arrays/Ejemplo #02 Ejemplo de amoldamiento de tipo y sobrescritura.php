<?php

error_reporting(false); // DESACTIVAR LOS ERRORES
header('Content-Type: text/plain');

$array = array(
  1    => "a",
  "1"  => "b",
  1.5  => "c", // OBSOLETO EN PHP 8 -> pérdida de presición
  true => "d",
);

var_dump($array);
