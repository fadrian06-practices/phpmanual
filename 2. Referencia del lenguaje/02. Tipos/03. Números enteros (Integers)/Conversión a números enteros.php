<?php

# ===============================
# =           IGNORAR           =
# ===============================
header('Content-Type: text/plain');

function convertirAEntero(mixed $entero): string {
  $entero = (int) $entero;
  return "$entero";
}

# ================================
# =           EJEMPLOS           =
# ================================
echo '(int) resource   --> ' . convertirAEntero(fopen(__FILE__, 'r')) . ' (N° recurso)' . PHP_EOL;
echo '(int) false      --> ' . convertirAEntero(false) . PHP_EOL;
echo '(int) true       --> ' . convertirAEntero(true) . PHP_EOL;
echo '(int) 1.9        --> ' . convertirAEntero(1.9) . PHP_EOL;
echo '(int) -1.9       --> ' . convertirAEntero(-1.9) . PHP_EOL;
echo '(int) NAN        --> ' . convertirAEntero(NAN) . PHP_EOL;
echo '(int) INF        --> ' . convertirAEntero(INF) . PHP_EOL;
echo '(int) []         --> ' . convertirAEntero([]) . PHP_EOL;
echo '(int) null       --> ' . convertirAEntero(null) . PHP_EOL;
echo '(int) [1, 2, 3]  --> ' . convertirAEntero([1, 2, 3]) . PHP_EOL;
echo '(int) ""         --> ' . convertirAEntero("") . PHP_EOL;
echo '(int) "1"        --> ' . convertirAEntero("1") . PHP_EOL;
echo '(int) "1e2"      --> ' . convertirAEntero("1e2") . PHP_EOL;
echo '(int) "1e-2"     --> ' . convertirAEntero("1e-2") . PHP_EOL;
echo '(int) "0b1101"   --> ' . convertirAEntero("0b1101") . PHP_EOL;
echo '(int) "01101"    --> ' . convertirAEntero("01101") . PHP_EOL;
echo '(int) "0xff1101" --> ' . convertirAEntero("0xff1101") . PHP_EOL;
echo '(int) "prueba"   --> ' . convertirAEntero("prueba") . PHP_EOL;
echo '(int) "0"        --> ' . convertirAEntero("0") . PHP_EOL . PHP_EOL;

echo '(int) ((0.1 + 0.7) * 10) --> ' . convertirAEntero((0.1 + 0.7) * 10) . PHP_EOL;

/* SALIDA:
-----------------------------------
(int) resource   --> 5 (N° recurso)
(int) false      --> 0
(int) true       --> 1
(int) 1.9        --> 1
(int) -1.9       --> -1
(int) NAN        --> 0
(int) INF        --> 0
(int) []         --> 0
(int) null       --> 0
(int) [1, 2, 3]  --> 1
(int) ""         --> 0
(int) "1"        --> 1
(int) "1e2"      --> 100
(int) "1e-2"     --> 0
(int) "0b1101"   --> 0
(int) "01101"    --> 1101
(int) "0xff1101" --> 0
(int) "prueba"   --> 0
(int) "0"        --> 0

(int) ((0.1 + 0.7) * 10) --> 7
 */
