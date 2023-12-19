<?php

header('Content-Type: text/plain');

class C {
}

function f(C $c = null) {
  var_dump($c);
}

f(new C);
f(null);
