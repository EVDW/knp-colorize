<?php

namespace Knp\Colorize\Colorize;

use Knp\Colorize\Colorize;

abstract class AbstractColorize implements Colorize
{
    protected $colors;

    public function __construct()
    {
        //test
        $this->colors = [];
    }

    public function colour($message)
    {
        foreach ($this->colors as $color) {
            $message = preg_replace('/(%('.$color->getName().'))(.*?)(%)/', '<span style="color:'.$color->getHexadecimal().'">$3</span>', $message);
        }

        return $message;
    }
}
