<?php

$a = 1.23456789;
$b = 1.23456780;
$épsilon = 0.00001;

if (abs($a - $b) < $épsilon) {
  echo "|\$a - \$b| ~ 8.9999999897117E-8 ~ 0.000000089999999897117\n";
  echo 'La diferencia entre $a y $b es menor a 0.00001';
}
