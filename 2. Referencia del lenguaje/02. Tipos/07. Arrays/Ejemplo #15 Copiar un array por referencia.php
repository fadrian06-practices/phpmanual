<?php

$arr1 = array(2, 3);
$arr2 = $arr1;
$arr2[] = 4; // $arr2 ha cambiado,
// $arr1 sigue siendo array(2, 3)

$arr3 = &$arr1;
$arr3[] = 4; // ahora $arr1 y $arr3 son iguales
