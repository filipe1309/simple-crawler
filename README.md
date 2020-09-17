# PHP Composer

## Iniciar composer
```
$ composer init
```

## Instalar libs
```

$ composer require guzzlehttp/guzzle # busca em  https://packagist.org/
```

symfony/dom-crawler # em require do composer.json

```
$ composer install # instala o que esta no composer.lock se existir, cc instala o que esta no update

$ composer update # instala o que esta no composer.json e atualiza

$ composer require symfony/css-selector

$ php buscar-cursos.php

```

## Atualizar autoload
```

$ composer dump-autoload # atualiza autoload
```

## Testes unitários (PHPUnit)
```
composer require --dev phpunit/phpunit

composer install --no-dev # para prod, baixa somente as dependencias do require

$ ./vendor/bin/phpunit --version

$ ./vendor/bin/phpunit tests/TestBuscadorDeCursos.php
```

## Verificador dos padrões de código (PSR12) (PHP Code Sniffer)
https://github.com/squizlabs/PHP_CodeSniffer

```
$ composer require --dev squizlabs/php_codesniffer

$ vendor/bin/phpcs --version

$ vendor/bin/phpcs --standard=PSR12 src/
```

## Analizador statico de sintaxe Phan
https://github.com/phan/phan

```
$ composer require --dev phan/phan

$ vendor/bin/phan --version

$ vendor/bin/phan --allow-polyfill-parser src/Buscador.php

# depois de setar o .phan/config.php
$ vendor/bin/phan --allow-polyfill-parser 

```

## Scripts personalizados (add manualmente)
```
composer test

composer cs

composer phan

# Referencia os 3 ultimos scritps em 1 só
composer check

# Exibe todos scripts disponiveis
composer list
```
