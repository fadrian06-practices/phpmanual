<?php

function foo1(): int|INT {
  return 0;
} // No permitido

function foo2(): bool|false {
  return false;
} // No permitido

function foo3(): int&Traversable {
  return 0;
} // No permitido

class Foo4 {
  function foo4(): self&Traversable {
    return $this;
  } // No permitido
}

class A {}

use A as B;

function foo5(): A|B {
  return new B;
} // No permitido ("use" es parte de la resolución del nombre)

function foo6(): A&B {
  return new B;
} // No permitido ("use" es parte de la resolución del nombre)

class X {}
class Y {}

class_alias('X', 'Y');

function foo7(): X|Y {
  return new X;
} // Permitido (La redundancia solo se detecta en tiempo de ejecución)

function foo8(): X&Y {
  return new X;
} // Permitido (La redundancia solo se detecta en tiempo de ejecución)
