# Conversión a string

El valor **true** del tipo boolean es convertido al string `"1"`.
El valor **false** del tipo boolean es convertido al string `""`
(el string vacío). Esto permite la conversión en ambos sentidos entre
los valores de los tipos boolean y string.

Un integer o float es convertido a un string que representa textualmente
el número (incluyendo la parte exponencial para los float). Los números
de punto flotante pueden ser convertidos mediante la notación exponencial
`(4.1E+6)`.

Los arrays siempre son convertidos al string `"Array"`. Debido a esto,
[echo](echo) y [print](print) no pueden por sí mismos mostrar el contenido
de un array. Para ver un único elemento individualmente, utilice una
construcción como `echo $arr['foo']`.

Los object en PHP 4 siempre son convertidos al string `"Object"`.
Para mostrar los valores de las propiedades de un objeto para su depuración,
lea los párrafos siguientes. Para obtener el nombre de la clase de un objeto,
emplee la función [get_class()](ger_class). A partir de PHP 5, se puede
emplear el método [__toString](__toString) cuando sea relevante.

Un resource siempre es convertido a string con la estructura
`"Resource id #1"`, donde 1 es el número de recurso asignado al resource
por PHP durante la ejecución. A pesar de que no se debe depender
de la estructura exacta, debido a que está sujeta a cambios, siempre será
única para un recurso dado dentro del tiempo de vida de un script en
ejecución (es decir, una petición web o proceso CLI), por lo que no será
reutilizada. Para obtener el tipo de un resource, emplee la función
[get_resource_type()](get_resource_type).

**null** siempre es convertido a un string vacío.
