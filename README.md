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
$convertColor = new MonokaiColorize();

return $convertColor->colour($message);
```

##### Your own theme

You also create your own theme by passing:
```php
$convertColor = new EmptyColorize();
```
And add colors of your choice:
```php
$colorBlue = new Color();
$colorBlue->setName('blue')->setHexadecimal('#01579B');
$this->addColor($colorBlue);
```

The final step, sends to the view:
```twig
{{ message|raw }}
```
