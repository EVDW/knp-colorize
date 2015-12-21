<?php

namespace spec\Knp\Colorize;

use Knp\Colorize\Color;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ColorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Knp\Colorize\Color');
    }

    function it_return_the_color_name()
    {
        $this->setName('Blue');

        $this->getName()->shouldReturn('Blue');
    }

    function it_return_the_hexadecimal_color()
    {
        $this->setHexadecimal('#ffffff');

        $this->getHexadecimal()->shouldReturn('#ffffff');
    }
}
