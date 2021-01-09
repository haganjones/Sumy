# Sumy

Sumy is a simple, chainable calculation library.

It started as a simple class in one of our projects but after 
needing and implementing the class in other projects we decided
to turn it into a reusable package.

Here is a quick example:
```php
$sumy = new Sumy();
$sumy->add(100)->divide(2);
 
$sumy->get(); // 50
```
 
## Installation
You can install this
[package](https://packagist.org/packages/slashequip/sumy) by
using [Composer](https://getcomposer.org/):
```php
composer require slashequip/sumy
```
 
## Getting Started
Sumy is super simple to use, first you need to initialize an
instance of Sumy in your project, you can do this a few ways:

```php
$sumyOne = new Sumy();
$sumyOne->get(); // 0
 
$sumyTwo = new Sumy(100);
$sumyTwo->get(); // 100
 
$sumyThree = new Sumy($sumyTwo);
$sumyThree->get() // 100
```

## Math
```php
$sumy = new Sumy(1000);
$sumy->add(140)->get(); // 1140
```

Before | Function            | After
------ | :-----------------: | -----:
1000   | `->add(140)`        | 1140
1000   | `->subtract(140)`   | 860
1000   | `->multiply(4.6)`   | 4600
1000   | `->divide(50)`      | 20
961    | `->sqrt()`          | 31
24     | `->pow(50)`         | 576

## Chaining
All Sumy's math methods can be chained:

```php
$sumy = new Sumy(100);
$sumy->add(400)->mulitply(4)->divide(2)->subtract(39)->sqrt()->pow(3);
 
$sumy->get(); //29791
```

## Licence
Copyright 2021 SlashEquip OÜ.

Distributed under the MIT licence. See LICENCE.txt for further information.