<?php

use PHPUnit\Framework\TestCase;
use APP\PrimeFactors;

class PrimeFactorsTest extends TestCase
{
    /**
     * @test
     * @dataProvider factors
     */
    public function it_generate_prime_factor_for_factors($number, $expected)
    {
        $factors = new PrimeFactors();
        $this->assertEquals($expected, $factors->generate($number));
    }

    public function factors(): array
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [5, [5]],
            [6, [2, 3]],
            [7, [7]],
            [100, [2, 2, 5, 5]]
        ];
    }
}
