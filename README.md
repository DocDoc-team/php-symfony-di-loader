# Symfony DI component loader

Forked from https://github.com/DocDoc-team/php-symfony-di-loader

[![Build Status](https://travis-ci.org/DocDoc-team/php-symfony-di-loader.svg?branch=master)](https://travis-ci.org/DocDoc-team/php-symfony-di-loader)
[![Code Coverage](https://scrutinizer-ci.com/g/DocDoc-team/php-symfony-di-loader/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/DocDoc-team/php-symfony-di-loader/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/DocDoc-team/php-symfony-di-loader/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/DocDoc-team/php-symfony-di-loader/?branch=master)


A simple loader for symfony [DependencyInjection component]( https://symfony.com/doc/current/components/dependency_injection.html)

### Install
`composer require docdoc/symfony-di-loader`


### Demo

```php
<?php
use DocDoc\SymfonyDiLoader\LoaderContainer;

$configs = ['./container.yml', './container.xml', './container.php'];
$fileCache = __DIR__ . '/var/container.cache.php';

$loader = new LoaderContainer;
$container = $loader->getContainer($configs, $fileCache);
```

Loader has auto detect config changes and watch services from configs and auto rebuild container.
You can disable all watch for production:

```php
<?php
use DocDoc\SymfonyDiLoader\LoaderContainer;

$loader = new LoaderContainer;
$loader->setCheckExpired(false); // watch configs disable
$loader->getWatcher()->setIsWatchReflection(false); // watch service class disable
$container = $loader->getContainer($configs, $fileCache);
```

Custom container extension:

```php
<?php
use DocDoc\SymfonyDiLoader\LoaderContainer;

$loader = new LoaderContainer;
$loader->addExtension($someContainerExtension);
$loader->addExtension($someContainerExtension2);
$container = $loader->getContainer($configs, $fileCache);
```
