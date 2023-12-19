<?php

header('Content-Type: text/plain');

class C {
}

class D extends C {
}

// Esta clase no extiende de C.
class E {
}

function f(C $c) {
  echo get_class($c) . "\n";
}

f(new C);
f(new D);
f(new E);
