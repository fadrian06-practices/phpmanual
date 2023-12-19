<?php
  // definiendo un booleano aleatorio para el ejemplo
  $expresión = (bool) rand(0, 1);
  echo '$expresión = ' . ($expresión ? 'true' : 'false') . PHP_EOL;
?>

<?php if ($expresión === true): ?>
  Esto se mostrará si la expresión es verdadera.
<?php else: ?>
  En caso contrario se mostrará esto.
<?php endif ?>
