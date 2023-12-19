<?php

class Foo {
  /* NO RECOMENDADO --> */ var $bar = 'Soy bar.';
  // RECOMENDADO    -->    public $bar = 'Soy bar.';
}

$foo = new Foo(); // <-- () opcionales
$bar = 'bar';
$baz = ['foo', 'bar', 'baz', 'quux'];

// Salida: $foo->bar ==> Soy bar.
echo "{$foo->$bar}\n";

// Salida: $foo->{bar} ==> $foo->bar ==> Soy bar.
echo "{$foo->{$baz[1]}}\n";
