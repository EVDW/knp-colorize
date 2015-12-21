<?php

namespace Knp\Colorize\Colorize;

use Knp\Colorize\Colorize\AbstractColorize;
use Knp\Colorize\Color;

class EmptyColorize extends AbstractColorize
{
    public function addColor(Color $color)
    {
        $this->colors[] = $color;

        return $this;
    }
}
