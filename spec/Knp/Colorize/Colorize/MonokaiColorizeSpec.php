<?php

namespace spec\Knp\Colorize\Colorize;

use Knp\Colorize\Color;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MonokaiColorizeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Knp\Colorize\Colorize\MonokaiColorize');
    }

    function it_convert_color_tag()
    {
        $message = "%blue[data]% Alfred Dupond a modifié(e) le %pinktitre%";

        $this->colour($message)->shouldReturn(
            '<span style="color:#66D9EF">[data]</span> Alfred Dupond a modifié(e) le <span style="color:#F92672">titre</span>'
        );
    }
}
