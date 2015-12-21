<?php

namespace spec\Knp\Colorize\Colorize;

use Knp\Colorize\Color;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EmptyColorizeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Knp\Colorize\Colorize\EmptyColorize');
    }

    function it_convert_color_tag()
    {
        $message = "%blue[data]% Alfred Dupond a modifié(e) le %pinktitre%";

        $colorBlue = new Color();
        $colorPink = new Color();
        $colorBlue->setName('blue')->setHexadecimal('#01579B');
        $colorPink->setName('pink')->setHexadecimal('#FD6767');
        $this->addColor($colorBlue);
        $this->addColor($colorPink);

        $this->colour($message)->shouldReturn(
            '<span style="color:#01579B">[data]</span> Alfred Dupond a modifié(e) le <span style="color:#FD6767">titre</span>'
        );
    }
}
