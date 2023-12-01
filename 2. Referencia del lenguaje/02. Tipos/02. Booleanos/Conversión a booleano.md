# Conversión a booleano

Cuando se realizan conversiones a boolean, los siguientes valores se consideran `false`:

- el boolean `false` mismo
- el integer `0` y `-0` (cero)
- el float `0.0` y `-0.0` (cero)
- el valor string vacío `""`, y el string `"0"`
- un `array` con cero elementos
- el tipo especial `NULL` (incluidas variables no establecidas)
- objetos `SimpleXML` creados desde etiquetas vacías

Cualquier otro valor se considera como `true` (incluido cualquier `resource` y `NAN`).

> **Advertencia
> `-1` se considera true, como cualquier otro número distinto de cero (ya sea negativo o positivo).**
