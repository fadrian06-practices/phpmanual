<?php

$obj = (object) array('1' => 'foo');
var_dump(isset($obj->{'1'})); // muestra 'bool(false)'
var_dump(@key($obj)); // muestra 'int(1)'
