<?php

$str = 'abc';

var_dump($str['1']); // 5.3, 5.4 -> string(1) "b"
var_dump(isset($str['1'])); // 5.3, 5.4 -> bool(true)

try {
  /*
  5.3 -> string(1) "b"
  5.4 -> Warning string(1) "b"
  >=8 -> TypeError::class
   */
  var_dump($str['1.0']);

  /*
  5.3 -> bool(true)
  5.4 -> Warning bool(true)
  >=8 -> TypeError::class
   */
  var_dump(isset($str['1.0']));

  /*
  5.3 -> string(1) "a"
  5.4 -> Warning string(1) "a"
  >=8 -> TypeError::class
   */
  var_dump($str['x']);

  /*
  5.3 -> bool(true)
  5.4 -> Warning bool(true)
  >=8 -> TypeError::class
   */
  var_dump(isset($str['x']));

  /*
  5.3 -> string(1) "b"
  5.4 -> Warning string(1) "b"
  >=8 -> TypeError::class
   */
  var_dump($str['1x']);

  /*
  5.3 -> bool(true)
  5.4 -> Warning bool(true)
  >=8 -> TypeError::class
   */
  var_dump(isset($str['1x']));
} catch (TypeError $error) {}
