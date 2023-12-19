<?php

class foo {
  public $bar = <<<'EOT'
  bar
  EOT; // Válido ya que bar está al mismo nivel de EOT;
}
