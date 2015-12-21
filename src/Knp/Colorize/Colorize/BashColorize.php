<?php

namespace Knp\Colorize\Colorize;

use Knp\Colorize\Color;
use Knp\Colorize\Colorize\AbstractColorize;
use Knp\Colorize\Convert\Convert;

class BashColorize extends AbstractColorize
{
    public function __construct()
    {
        $this->colors = Convert::convertToObjects([
            "black" => "\e[0;30m",
            "red" => "\e[0;31m",
            "green" => "\e[0;32m",
            "yellow" => "\e[0;33m",
            "blue" => "\e[0;34m",
            "purple" => "\e[0;35m",
            "cyan" => "\e[0;36m",
            "white" => "\e[0;37m",
        ]);
    }

    public function colour($message)
    {
        foreach ($this->colors as $color) {
            $message = preg_replace('/(%('.$color->getName().'))(.*?)(%)/', $color->getHexadecimal().'$3\e[0m', $message);
        }

        return $message;
    }
}
