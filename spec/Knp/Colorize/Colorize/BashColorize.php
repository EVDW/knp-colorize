<?php

namespace spec\Knp\Colorize\Colorize;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BachColorizeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Knp\Colorize\Colorize\BachColorize');
    }

    function it_convert_color_tag()
    {
        $message = "%black[data]% Alfred Dupond a modifié(e) le %redtitre%";

        $this->colour($message)->shouldReturn(
            '\e[0;30m[data]\e[0m Alfred Dupond a modifié(e) le \e[0;31mtitre\e[0m'
        );
    }
}
