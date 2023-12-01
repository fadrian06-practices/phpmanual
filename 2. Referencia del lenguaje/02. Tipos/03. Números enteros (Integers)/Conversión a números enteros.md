# Conversión a números enteros

## Desde resource

Si un `resource` es convertido a un `integer`, el resultado será el número de recurso
único asignado al resource por PHP durante la ejecución.

## Desde booleanos

**false** producirá `0` (cero), y **true** producirá `1` (uno).

## Desde números de punto flotante

Cuando se convierte un `float` a un `integer`, el número será redondeado _hacia cero_.

> Nota:
> A partir de PHP 7.0.0, en lugar de ser indefinidos y dependientes de la plataforma,
> `NaN` e `Infinity` siempre serán cero al amoldarlos a integer.

> **Advertencia**
> Nunca se debe convertir una fracción desconocida a un integer, ya que a veces
> puede conducir a resultados inesperados.

```php
<?php

echo (int) ((0.1 + 0.7) * 10); // ¡muestra 7!
```

## Desde otros tipos

> **Precaución**
> El comportamiento de la conversión de integer a otros tipos es indefinido.
No confíe en ningún comportamiento observado, ya que puede cambiar sin previo aviso.
