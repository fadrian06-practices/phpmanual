<?php
  /*
  $_POST = [
    'nombre' => 'John',
    'edad' => 20
  ]
   */
?>

Hola <?php echo htmlspecialchars($_POST['nombre']) ?>.
Usted tiene <?php echo (int) $_POST['edad'] ?> años.
