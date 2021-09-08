<?php

use App\Circle;

require_once __DIR__ . '/../Classes/Circle.php';

class CircleTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @param bool  $expected
     * @param int   $radius
     * @param mixed $value
     *
     *
     * @dataProvider dataForCalculateArea
     */
    public function testSum($expected, $radius, $value)
    {
        $circle = new \Circle($radius);
        $area   = $circle->calculateArea();
        if ($expected) {
            $this->assertEquals($area, $value);
        } else {
            $this->assertNotEquals($area, $value);
        }
    }

    /**
     *
     * @return array
     */
    public function dataForCalculateArea(): array
    {
        return [
            'Area Correct'   => [true, 3, 28.259999999999998],
            'Area incorrect' => [false, 5, 400]
        ];
    }
}
