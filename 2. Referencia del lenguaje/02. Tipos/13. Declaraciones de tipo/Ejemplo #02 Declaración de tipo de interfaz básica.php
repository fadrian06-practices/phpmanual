<?php

header('Content-Type: text/plain');

interface I {
  public function f();
}

class C implements I {
  public function f() {
  }
}

// Esta clase no implementa I.
class E {
}

function f(I $i) {
  echo get_class($i) . "\n";
}

f(new C);
f(new E);
