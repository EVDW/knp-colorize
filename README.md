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

Use with Twig Extension
-----------------------

For more simplification, you can add a twig extension.

##### Twig Extension

```php
use Knp\Colorize\Colorize\MonokaiColorize;

class ConvertColorExtension extends \Twig_Extension
{
    public function convertColor($message)
    {
        $convertColor = new MonokaiColorize();

        return $convertColor->colour($message);
    }

    public function getFunctions()
    {
        return [
            'convert_color' => new \Twig_Function_Method($this, 'convertColor',
                array('is_safe' => array('html'))
            ),
        ];
    }

    public function getName()
    {
        return 'app_convert_color';
    }
}
```

##### Twig service

```yml
services:
    twig.convert_color:
        class: Bundle\Twig\ConvertColorExtension
        tags:
            - { name: twig.extension }
```

##### Twig view

```twig
{{ convert_color(message) }}
```
