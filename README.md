# Curso composer

```
$ composer init

$ composer require guzzlehttp/guzzle # busca em  https://packagist.org/
```

symfony/dom-crawler # em require do composer.json

```
$ composer install # instala o que esta no composer.lock se existir, cc instala o que esta no update

$ composer update # instala o que esta no composer.json e atualiza

$ composer require symfony/css-selector

$ php buscar-cursos.php

$ composer dump-autoload # atualiza autoload

composer require --dev phpunit/phpunit

composer install --no-dev # para prod, baixa somente as dependencias do require

$ ./vendor/bin/phpunit --version

$ ./vendor/bin/phpunit tests/TestBuscadorDeCursos.php
```

https://github.com/squizlabs/PHP_CodeSniffer

```
$ composer require --dev squizlabs/php_codesniffer

$ vendor/bin/phpcs --version

$ vendor/bin/phpcs --standard=PSR12 src/
```
