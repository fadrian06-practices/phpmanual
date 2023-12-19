<?php

header('Content-Type: text/plain');

$array = array(
  "foo" => "bar",
  "bar" => "foo",
  100   => -100,
  -100  => 100,
);

var_dump($array);
