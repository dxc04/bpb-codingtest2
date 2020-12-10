<?php


namespace Lib\RandomNumbers;
Use Exception;

class MyTenRandomNumbers
{
    /*
     * Handles the ten random numbers
     */
    protected $random_numbers = [];

    /*
     * Immediately create the ten random numbers on instantiation.
     * We limit the range of random numbers from 0-100.
     */
    public function __construct()
    {
        $this->random_numbers = array_map(
            function () {
                return rand(0, 100);
            },
            range(1, 10)
        );
    }

    /*
     * Randomly picks 2 numbers within the $this->random_numbers and calculate the sum
     */
    public function sumTwoNumbers(): int
    {
        $two_random_numbers = array_rand($this->random_numbers, 2);
        echo 'The two randomly picked numbers are: ' . implode(', ', $two_random_numbers) . "\n Sum: "; // this can be commented, I'm just adding this for verification.
        return $two_random_numbers[0] + $two_random_numbers[1];
    }

    /*
     * Access an order parameters (ASC, DESC), and returns a result sorted based on the parameter value
     * @throws Exception
     */
    public function sortRandomNumbers($by = 'asc'): array
    {
        $by = strtolower($by);
        if (!($by === 'asc' || $by === 'desc')) {
            throw new Exception("Sort by parameter must a string 'ASC' or 'DESC', '{$by}' given.");
        }
        $sort_array = $this->random_numbers;
        if ($by === 'desc') {
           rsort($sort_array);
        } else {
           sort($sort_array);
        }
        return $sort_array;
    }

    /*
     * Calculate the average of $this->random_numbers
     */
    public function averageOfRandomNumbers(): float
    {
        return array_sum($this->random_numbers) / count($this->random_numbers);
    }

    /*
     * Retrieves the current random numbers.
     */
    public function getMyRandomNumbers(): array
    {
       return $this->random_numbers;
    }
}