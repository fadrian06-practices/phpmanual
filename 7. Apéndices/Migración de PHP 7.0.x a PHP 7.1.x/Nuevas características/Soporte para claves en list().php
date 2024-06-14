<?php

$datos = [
  ['id' => 1, 'nombre' => 'Tom'],
  ['id' => 2, 'nombre' => 'Fred'],
];

// Estilo de list()
list('id' => $id1, 'nombre' => $nombre1) = $datos[0];

// Estilo de []
['id' => $id1, 'nombre' => $nombre1] = $datos[0];

// Estilo de list()
foreach ($datos as list('id' => $id, 'nombre' => $nombre)) {
  // aquí va la lógica con $id y $nombre
}

// Estilo de []
foreach ($datos as ['id' => $id, 'nombre' => $nombre]) {
  // aquí va la lógica con $id y $nombre
}
