<?php

namespace App;

class PrimeFactors
{
    public function generate($number): array
    {
        //1. Is the number divisible by 2
        //2. if true, then divide by 2.If false, increase candidate and try again
        //3. repeat

        $factors = [];

        for ($candidate = 2; $number > 1; $candidate++) {
            for (; $number % $candidate == 0; $number = $number / $candidate) {
                $factors[] = $candidate;
            }
        }

        return $factors;
    }
}