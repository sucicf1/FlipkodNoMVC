<?php

require_once 'ShapeInterface.php';

class Circle implements ShapeInterface
{
    private $r;

    function __construct(float $r)
    {
        $this->r = $r;
    }

    public function getSurface()
    {
        return $this->r * $this->r * pi();
    }

    public function getCircumference()
    {
        return 2 * $this->r * pi();
    }
}