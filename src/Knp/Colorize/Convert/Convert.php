<?php

namespace Knp\Colorize\Convert;

use Knp\Colorize\Color;

class Convert
{
    public static function convertToObjects(array $arrayColors)
    {
        foreach ($arrayColors as $key => $value) {
            $color = new Color();
            $color->setName($key)->setHexadecimal($value);
            $colors[] = $color;
        }

        return $colors;
    }
}
