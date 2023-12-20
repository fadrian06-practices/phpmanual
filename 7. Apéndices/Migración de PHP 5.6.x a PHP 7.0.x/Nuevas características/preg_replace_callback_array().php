Con la nueva función preg_replace_callback_array(), el código escrito es
más claro al emplear la función preg_replace_callback(). Antes de PHP 7,
las retrollamadas que necesitaban ser ejecutadas por cada expresión regular
requerían que la función de retrollamada fuera contaminada con muchas
ramificaciones.

Ahora, las retrollamadas se pueden registrar para cada expresión regular
usando un array asociativo, donde la clave es una expresión regular y el
valor es una retrollamada.

<?php

/*----------  preg_replace_callback()  ----------*/
echo preg_replace_callback(
  '/\b(foo|bar)\b/',
  function (array $coincidencias): string {
    if ($coincidencias[1] === 'foo') {
      return strtoupper($coincidencias[0]);
    }

    if ($coincidencias[1] === 'bar') {
      return ucfirst($coincidencias[0]);
    }
  },
  'foo y bar'
), PHP_EOL;

/*----------  preg_replace_callback_array()  ----------*/
echo preg_replace_callback_array(
  [
    '/\bfoo\b/' => function (array $coincidencias): string {
      return strtoupper($coincidencias[0]);
    },
    '/\bbar\b/' => function (array $coincidencias): string {
      return ucfirst($coincidencias[0]);
    }
  ],
  'foo y bar'
);
