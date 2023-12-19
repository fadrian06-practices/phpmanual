```php
// int|string
42    --> 42          // tipo exacto
"42"  --> "42"        // tipo exacto
new ObjectWithToString --> "Resultado de __toString()"
                      // object nunca compatible con int, se resuelve como string
42.0  --> 42          // float compatible con int
42.1  --> 42          // float compatible con int
1e100 --> "1.0E+100"  // float demasiado largo para tipo int, se resuelve como string
INF   --> "INF"       // float demasiado largo para tipo int, se resuelve como string
true  --> 1           // bool compatible con int
[]    --> TypeError   // array no compatible con int o string

// int|float|bool
"45"    --> 45        // string numérico int
"45.0"  --> 45.0      // string numérico float

"45X"   --> true      // no es string numérico, se resuelve como bool
""      --> false     // no es string numérico, se resuelve como bool
"X"     --> true      // no es string numérico, se resuelve como bool
[]      --> TypeError // array no compatible con int, float or bool
```
