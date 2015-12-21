<?php

namespace Knp\Colorize;

class Color
{
    private $name;

    private $hexadecimal;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getHexadecimal()
    {
        return $this->hexadecimal;
    }

    public function setHexadecimal($hexadecimal)
    {
        $this->hexadecimal = $hexadecimal;

        return $this;
    }
}
