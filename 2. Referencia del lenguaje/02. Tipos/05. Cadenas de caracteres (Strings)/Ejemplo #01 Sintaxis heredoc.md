# Sintaxis heredoc

## Ejemplo no válido

```php
<?php

class foo {
  public $bar = <<<EOT
bar
  EOT;
}
```

## Ejemplo válido

```php
<?php

class foo {
  public $bar = <<<EOT
  bar
  EOT;
}
```
