<?php


namespace Lib\RandomNumbers;


class AnotherTenRandomNumbers extends MyTenRandomNumbers
{
    /*
     * Overrides sumTwoNumbers from parent class.
     * Sums the value of the first and last index.
     */
    public function sumTwoNumbers(): int
    {
        return $this->random_numbers[0] + $this->random_numbers[9];
    }
}