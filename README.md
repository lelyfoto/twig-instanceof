# Twig InstanceOf Expression

[![Package version](https://img.shields.io/packagist/v/lelyfoto/twig-instanceof.svg?style=flat-square)](https://packagist.org/packages/lelyfoto/twig-instanceof)
[![PHP version](https://img.shields.io/packagist/php-v/lelyfoto/twig-instanceof.svg?style=flat-square)](https://packagist.org/packages/lelyfoto/twig-instanceof)
[![License](https://img.shields.io/packagist/l/lelyfoto/twig-instanceof.svg?style=flat-square)](LICENSE)

Adds InstanceOf Expression as Twig Extension.
When you want to check for a specific type of variable in a twig template.

## Prerequisites
- PHP 7.4+
- Symfony 5.4 or 6.x
- Twig 3.x

## Installation
1. Install this Symfony bundle with composer:
    ```bash
    composer require lelyfoto/twig-instanceof
    ```
2. Make sure the bundle is added to `config/bundles.php`:
    ```
    return [
        // ...
        Lelyfoto\Twig\InstanceOf\TwigInstanceOfBundle::class => ['all' => true],
        // ...
    ];   
    ```

## Usage
Important to note that when testing for a class that you must use quotes and escaping inside the twig templates.   

```twig
{% if testObject is instanceof('\\Example\\TestInterface') %}
    Do something with {{ testObject.show() }}
{% endif %}
```

## Use without Symfony

```php
use Twig\Environment;
use Lelyfoto\Twig\InstanceOf\InstanceOfExtension;

$twig = new Environment($loader);
$twig->addExtension(new InstanceOfExtension());
```