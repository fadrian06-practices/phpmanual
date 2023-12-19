<?php

header('Content-Type: text/plain');

/*
NaN
---
Algunas operaciones numéricas pueden resultar en un valor representado por
la constante NAN. Este resultado representa un valor no definido o no
representable mediante cálculos de punto flotante. Cualquier comparación,
ya sea estricta o no, de este valor con cualquier otro valor,
incluido él mismo, pero excepto true, tendrá un resultado de false.

Ya que NAN representa cualquier número de diferentes valores,
NAN no debería compararse con otros valores, incluido él mismo;
en su lugar debería comprobarse usando la función is_nan().
 */

echo '(NAN == [1, 2, 3]) --> ' . (NAN == [1, 2, 3] ? 'true' : 'false') . PHP_EOL;
echo '(NAN == true)    --> ' . (NAN == true ? 'true' : 'false') . PHP_EOL;
echo '(NAN === true)   --> ' . (NAN === true ? 'true' : 'false') . PHP_EOL;
echo '(NAN == false)   --> ' . (NAN == false ? 'true' : 'false') . PHP_EOL;
echo '(NAN == NAN)     --> ' . (NAN == NAN ? 'true' : 'false') . PHP_EOL;
echo '(NAN == 1)       --> ' . (NAN == 1 ? 'true' : 'false') . PHP_EOL;
echo '(NAN == 1.1)     --> ' . (NAN == 1.1 ? 'true' : 'false') . PHP_EOL;
echo '(NAN == "")      --> ' . (NAN == "" ? 'true' : 'false') . PHP_EOL;
echo '(NAN == "a")     --> ' . (NAN == "a" ? 'true' : 'false') . PHP_EOL;
echo '(NAN == [])      --> ' . (NAN == [] ? 'true' : 'false') . PHP_EOL;
echo '(NAN === object) --> ' . (NAN === (new stdClass) ? 'true' : 'false') . PHP_EOL;
echo '(NAN == null)    --> ' . (NAN == null ? 'true' : 'false') . PHP_EOL;
echo '(NAN == INF)     --> ' . (NAN == INF ? 'true' : 'false') . PHP_EOL;
echo 'is_nan(NAN)      --> ' . (is_nan(NAN) ? 'true' : 'false') . PHP_EOL;
echo 'is_nan(1)        --> ' . (is_nan(1) ? 'true' : 'false') . PHP_EOL;
echo 'is_nan(1.1)      --> ' . (is_nan(1.1) ? 'true' : 'false') . PHP_EOL;
echo 'is_nan(INF)      --> ' . (is_nan(INF) ? 'true' : 'false') . PHP_EOL;

/*
(NAN == [1, 2, 3]) --> false
(NAN == true)    --> true
(NAN === true)   --> false
(NAN == false)   --> false
(NAN == NAN)     --> false
(NAN == 1)       --> false
(NAN == 1.1)     --> false
(NAN == "")      --> false
(NAN == "a")     --> false
(NAN == [])      --> false
(NAN === object) --> false
(NAN == null)    --> false
(NAN == INF)     --> false
is_nan(NAN)      --> true
is_nan(1)        --> false
is_nan(1.1)      --> false
is_nan(INF)      --> false
 */
