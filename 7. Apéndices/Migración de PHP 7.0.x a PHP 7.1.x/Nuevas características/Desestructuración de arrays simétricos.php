<?php

$datos = [
  [1, 'Tom'],
  [2, 'Fred'],
];

// Estilo de list()
list($id1, $nombre1) = $datos[0];

// Estilo de []
[$id1, $list] = $datos[0];

// Estilo de list()
foreach ($datos as list($id, $nombre)) {
  // aquí va la lógica con $id y $nombre
}

// Estilo de []
foreach ($datos as [$id, $nombre]) {
  // aquí va la lógica con $id y $nombre
}
