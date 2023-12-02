<?php

$a = array(1 => 'uno', 2 => 'dos', 3 => 'tres');
unset($a[2]);
/* producirá un array que se ha definido como
   $a = array(1 => 'uno', 3 => 'tres');
   y NO
   $a = array(1 => 'uno', 2 =>'tres');
*/

$b = array_values($a);
// Ahora $b es array(0 => 'uno', 1 =>'tres')
