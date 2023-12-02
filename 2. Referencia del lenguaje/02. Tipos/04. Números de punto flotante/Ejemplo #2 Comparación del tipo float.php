<?php

$a = 1.23456789;
$b = 1.23456780;
$épsilon = 0.00001;

if (abs($a - $b) < $épsilon) {
  echo "true";
}
