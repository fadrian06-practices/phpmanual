<?php

$bar = 'bar';
$arr = ['bar' => 'bar'];

function algunaFunc($bar) {
  return $bar;
}

echo $arr[algunaFunc($bar)];
