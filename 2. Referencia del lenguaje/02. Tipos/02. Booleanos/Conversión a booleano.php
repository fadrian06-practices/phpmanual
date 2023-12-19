<?php

# ===============================
# =           IGNORAR           =
# ===============================
header('Content-Type: text/plain');

function convertirABooleano(mixed $bool): string {
  $bool = (bool) $bool;
  return $bool ? 'true' : 'false';
}

# ================================
# =           EJEMPLOS           =
# ================================
echo '(bool) false --> ' . convertirABooleano(false) . PHP_EOL;
echo '(bool) 0     --> ' . convertirABooleano(0) . PHP_EOL;
echo '(bool) -0    --> ' . convertirABooleano(-0) . PHP_EOL;
echo '(bool) 0.0   --> ' . convertirABooleano(0.0) . PHP_EOL;
echo '(bool) -0.0  --> ' . convertirABooleano(-0.0) . PHP_EOL;
echo '(bool) ""    --> ' . convertirABooleano("") . PHP_EOL;
echo '(bool) "0"   --> ' . convertirABooleano("0") . PHP_EOL;
echo '(bool) []    --> ' . convertirABooleano([]) . PHP_EOL;
echo '(bool) null  --> ' . convertirABooleano(null) . PHP_EOL;
echo '(bool) SimpleXML "<empty></empty>" --> ' . convertirABooleano(new SimpleXMLElement('<empty></empty>')) . PHP_EOL;

echo str_repeat('-', 80) . PHP_EOL;

echo '(bool) true      --> ' . convertirABooleano(true) . PHP_EOL;
echo '(bool) 1         --> ' . convertirABooleano(1) . PHP_EOL;
echo '(bool) -1        --> ' . convertirABooleano(-1) . PHP_EOL;
echo '(bool) 1.0       --> ' . convertirABooleano(1.0) . PHP_EOL;
echo '(bool) -1.0      --> ' . convertirABooleano(-1.0) . PHP_EOL;
echo '(bool) "a"       --> ' . convertirABooleano("a") . PHP_EOL;
echo '(bool) "1"       --> ' . convertirABooleano("1") . PHP_EOL;
echo '(bool) [1, 2, 3] --> ' . convertirABooleano([1, 2, 3]) . PHP_EOL;
echo '(bool) object    --> ' . convertirABooleano(new stdClass) . PHP_EOL;
echo '(bool) SimpleXML "<noempty>content</noempty>" --> ' . convertirABooleano(new SimpleXMLElement('<noempty>content</noempty>')) . PHP_EOL;

/* SALIDA:
--------------------------------------------------------------------------------
(bool) false --> false
(bool) 0     --> false
(bool) -0    --> false
(bool) 0.0   --> false
(bool) -0.0  --> false
(bool) ""    --> false
(bool) "0"   --> false
(bool) []    --> false
(bool) null  --> false
(bool) SimpleXML "<empty></empty>" --> false
--------------------------------------------------------------------------------
(bool) true      --> true
(bool) 1         --> true
(bool) -1        --> true
(bool) 1.0       --> true
(bool) -1.0      --> true
(bool) "a"       --> true
(bool) "1"       --> true
(bool) [1, 2, 3] --> true
(bool) object    --> true
(bool) SimpleXML "<noempty>content</noempty>" --> true
 */
