<?php

header('Content-Type: text/plain');

// llenar un array con todos los ítems de un directorio
$handle = opendir('.');

while (false !== ($file = readdir($handle))) {
  $files[] = $file;
}

closedir($handle);

sort($files);
print_r($files);
