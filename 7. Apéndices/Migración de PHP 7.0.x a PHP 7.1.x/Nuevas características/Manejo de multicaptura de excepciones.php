<?php

class PrimerExcepcion {
}

class SegundaExcepcion {
}

try {
  // algo de código
} catch (PrimerExcepcion | SegundaExcepcion $e) {
  // manejar la primera y segunda excepción
}
