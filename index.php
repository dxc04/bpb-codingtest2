<?php

use Lib\RandomNumbers\MyTenRandomNumbers;
use Lib\RandomNumbers\AnotherTenRandomNumbers;

require_once 'app/start.php';

$nl = PHP_SAPI === 'cli' ? "\n" : "<br />";

$ten_random_numbers = new MyTenRandomNumbers();

echo "Current Random Numbers: {$nl}";
var_dump($ten_random_numbers->getMyRandomNumbers());
echo "{$nl}{$nl}Sum of Two Random Numbers: {$nl}";
var_dump($ten_random_numbers->sumTwoNumbers());
echo "{$nl}{$nl}Sort Random Numbers by ASC: {$nl}";
var_dump($ten_random_numbers->sortRandomNumbers('ASC'));
echo "{$nl}{$nl}Sort Random Numbers by DESC: {$nl}";
var_dump($ten_random_numbers->sortRandomNumbers('DESC'));
echo "{$nl}{$nl}Average of Random Numbers: {$nl}";
var_dump($ten_random_numbers->averageOfRandomNumbers());

$another_ten_random_numbers = new AnotherTenRandomNumbers();
echo "{$nl}{$nl}{$nl}Using the child class.{$nl}";
echo "{$nl}Sum of the value of the first and last index: {$nl}";
var_dump($another_ten_random_numbers->sumTwoNumbers());