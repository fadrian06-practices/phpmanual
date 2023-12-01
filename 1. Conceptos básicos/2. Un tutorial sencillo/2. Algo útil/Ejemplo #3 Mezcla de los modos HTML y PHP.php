<?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) { ?>
  <h3>strpos() debe haber devuelto no falso</h3>
  <p>Está usando Internet Explorer</p>
<?php } else { ?>
  <h3>strpos() debe haber devuelto falso</h3>
  <p>No está usando Internet Explorer</p>
<?php } ?>
