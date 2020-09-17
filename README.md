# Simple PHP Crawler
> Project based on Alura PHP Composer course

## Start composer
```
$ composer init
```

## Install libs
```

$ composer require guzzlehttp/guzzle # search in https://packagist.org/
```

symfony/dom-crawler # in require section of composer.json

```
$ composer install # if composer.lock exists, install what is in composer.lock, otherwise install what is in composer.json

$ composer update # install and update what is in composer.json

$ composer require symfony/css-selector

$ php buscar-cursos.php

```

## Update Composer autoload
```
$ composer dump-autoload # atualiza autoload
```

## Unit tests (PHPUnit)
```
composer require --dev phpunit/phpunit

composer install --no-dev # to prod, download only require dependencies

$ ./vendor/bin/phpunit --version

$ ./vendor/bin/phpunit tests/TestBuscadorDeCursos.php
```

## Verify code standards (PSR12) (PHP Code Sniffer)
https://github.com/squizlabs/PHP_CodeSniffer

```
$ composer require --dev squizlabs/php_codesniffer

$ vendor/bin/phpcs --version

$ vendor/bin/phpcs --standard=PSR12 src/
```

## Syntax statical code analyzer (Phan)
https://github.com/phan/phan

```
$ composer require --dev phan/phan

$ vendor/bin/phan --version

$ vendor/bin/phan --allow-polyfill-parser src/Buscador.php

# depois de setar o .phan/config.php
$ vendor/bin/phan --allow-polyfill-parser 

```

## Custom Composer scripts (add manually in composer.json)
```
composer test

composer cs

composer phan

# References the last 3 scripts in 1 script
composer check

# Lista all scripts available
composer list
```


## Composer Versioning (Semantic Versioning)

https://getcomposer.org/doc/articles/versions.md#exact-version-constraint

https://semver.org/

```
git tag -a v1.0.0

git push origin --tags
```
