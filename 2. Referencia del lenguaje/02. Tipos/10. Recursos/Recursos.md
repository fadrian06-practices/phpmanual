# Recursos

Un valor tipo resource es una variable especial, que contiene una referencia a
un recurso externo. Los recursos son creados y usados por funciones especiales.

## Conversión a recurso

Dado que las variables resource contienen gestores especiales a archivos
abiertos, conexiones con bases de datos, áreas de pintura de imágenes y cosas
por el estilo, la conversión a tipo resource carece de sentido.

## Liberación de recursos

Gracias al sistema de conteo de referencias introducido con el Motor Zend,
un recurso que ya no es referenciado es detectado automáticamente, y es
liberado por el recolector de basura. Por esta razón, rara vez se necesita
liberar la memoria manualmente.

> Nota: Los enlaces persistentes con bases de datos son una excepción a esta regla.
Ellos no son destruidos por el recolector de basura.
