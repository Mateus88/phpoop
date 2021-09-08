<?php

use App\Classes\Shape;

require_once __DIR__ . '/Shape.php';


class Circle extends Shape
{

    protected $radius;
    protected static $typeShape = 3;

    public function __construct(float $radius)
    {
        parent::__construct(null, null);
        $this->setRadius($radius);
    }


    public function getRadius(): float
    {
        return $this->radius;
    }

    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    public function calculateArea(): float
    {
        return 3.14 * ($this->radius * $this->radius);
    }

    public function showProperties(): object
    {
        $obj         = new \stdClass();
        $obj->name   = $this->getName();
        $obj->radius = $this->getRadius();
        $obj->id     = $this->getId();

        return $obj;
    }
}
