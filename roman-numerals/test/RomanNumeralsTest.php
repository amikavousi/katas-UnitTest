<?php


use App\RomanNumeral;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    /**
     * @test
     * @dataProvider checks
     */
    public function it_generate_roman_numeral($number, $expected)
    {
        $this->assertEquals($expected, RomanNumeral::generate($number));
    }

    /**
     * @test
     * @dataProvider invalid
     */
    public function it_generate_roman_numeral_is_invalid($number)
    {
        $this->assertFalse(RomanNumeral::generate($number));
    }

    public function checks(): array
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [8, 'VIII'],
            [9, 'IX'],
            [10, 'X'],
            [11, 'XI'],
            [12, 'XII'],
            [13, 'XIII'],
            [14, 'XIV'],
            [20, 'XX'],
            [21, 'XXI'],
            [24, 'XXIV'],
            [40, 'XL'],
            [44, 'XLIV'],
            [50, 'L'],
            [90, 'XC'],
            [100, 'C'],
            [400, 'CD'],
            [500, 'D'],
            [900, 'CM'],
            [1000, 'M'],
            [2001, 'MMI'],
            [2004, 'MMIV'],
        ];
    }

    public function invalid(): array
    {
        return[
            [0],
            [4000]
        ];
    }

}
