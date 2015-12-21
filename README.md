Knp : Colorize
==============

[![Build Status](https://travis-ci.org/EVDW/knp-colorize.svg?branch=master)](https://travis-ci.org/EVDW/knp-colorize)

Usage
-----

For guys who just need to colorize php messages with simple tags.

Installation
------------

```bash
composer require evdw/colorize
```

Use Colorize
------------

Add color tags `'%color ... %'` to your message:
```php
$message = '%pink[CREATE TEAM]% The Dream Team has been %greencreated%.'
```

##### Monokai theme

And give it to the theme you want:
```php
use Knp\Colorize\Colorize\MonokaiColorize;

$convertColor = new MonokaiColorize();

return $convertColor->colour($message);
```

##### Your own theme

You also create your own theme by passing:
```php
use Knp\Colorize\Colorize\EmptyColorize;

$convertColor = new EmptyColorize();
```
And add colors of your choice:
```php
use Knp\Colorize\Color;

$colorBlue = new Color();
$colorBlue->setName('blue')->setHexadecimal('#01579B');
$this->addColor($colorBlue);
```
But, if you have a lot of colors, you can do this:
```php
$colorsArray = [
    "black" => "#000000",
    "white" => "#ffffff"
];

foreach (Convert::convertToObjects($colorsArray) as $colorObject) {
    $this->addColor($colorObject);
}
```
