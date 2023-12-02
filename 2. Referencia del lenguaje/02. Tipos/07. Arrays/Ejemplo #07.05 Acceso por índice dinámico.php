<?php

error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);
// Array simple:
$array = array(1, 2);
$count = count($array);

for ($i = 0; $i < $count; $i++) {
  echo "\nRevisando $i: \n";
  echo "Mal: " . $array['$i'] . "\n";
  echo "Bien: " . $array[$i] . "\n";
  echo "Mal: {$array['$i']}\n";
  echo "Bien: {$array[$i]}\n";
}
