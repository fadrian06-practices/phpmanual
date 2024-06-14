<?php

function prueba(object $obj): object {
  return new SplQueue;
}

prueba(new stdClass);
