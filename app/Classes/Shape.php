<?php

namespace App\Classes;

class Shape
{

    public $name;
    protected $width;
    protected $length;
    protected static $typeShape = 1;
    private $id;

    public function __construct($width, $length)
    {
        $this->setWidth($width);
        $this->setLength($length);
        $this->setType();
        $this->setId();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function setWidth(?float $width): void
    {
        $this->width = $width;
    }

    public function getLength(): float
    {
        return $this->length;
    }

    public function setLength(?float $length): void
    {
        $this->length = $length;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId()
    {
        $this->id = uniqid($this->type);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(): void
    {
        $this->type = static::$typeShape;
    }

    public function calculateArea(): float
    {
        return $this->length * $this->width;
    }

    public function showProperties(): object
    {
        $obj = new \stdClass();
        $obj->name = $this->getName();
        $obj->width = $this->getWidth();
        $obj->length = $this->getLength();
        $obj->type = $this->getType();
        $obj->id = $this->getId();

        return $obj;
    }
}
