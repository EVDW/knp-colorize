<?php

namespace Knp\Colorize\Colorize;

use Knp\Colorize\Color;
use Knp\Colorize\Colorize\AbstractColorize;
use Knp\Colorize\Convert\Convert;

class MonokaiColorize extends AbstractColorize
{
    public function __construct()
    {
        $this->colors = Convert::convertToObjects([
            "ghostWhite" => "#F8F8F0",
            "lightGhostWhite" => "#F8F8F2",
            "lightGray" => "#CCC",
            "gray" => "#888",
            "brownGray" => "#49483E",
            "darkGray" => "#282828",
            "yellow" => "#E6DB74",
            "blue" => "#66D9EF",
            "pink" => "#F92672",
            "purple" => "#AE81FF",
            "brown" => "#75715E",
            "orange" => "#FD971F",
            "lightOrange" => "#FFD569",
            "green" => "#A6E22E",
            "seaGreen" => "#529B2F",
        ]);
    }
}
