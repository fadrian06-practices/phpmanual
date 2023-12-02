<?php

var_dump("0D1" == "000"); // false, "0D1" no está en notación científica
var_dump("0E1" == "000"); // true, "0E1" es 0 * (10 ^ 1), o 0
var_dump("2E1" == "020"); // true, "2E1" es 2 * (10 ^ 1), o 20
