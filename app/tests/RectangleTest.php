<?php

use App\Rectangle;

require_once __DIR__ . '/../Classes/Rectangle.php';

class RectangleTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @param bool $expected
     * @param int  $width
     * @param int  $length
     * @param int  $value
     *
     *
     * @dataProvider dataForCalculateArea
     */
    public function testSum($expected, $width, $length, $value)
    {
        $rectangle = new \Rectangle($width, $length);
        $area      = $rectangle->calculateArea();
        
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
            'Area Correct'   => [true, 10, 20, 200],
            'Area incorrect' => [false, 10, 20, 400]
        ];
    }
}
