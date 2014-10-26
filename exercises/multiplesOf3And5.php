<?php

// Find the sum of all the multiples of 3 or 5 below 1000.

echo PHP_EOL . "Project Euler, problem 1" . PHP_EOL;
echo PHP_EOL . "Find the sum of all the multiples of 3 or 5 below 1000" . PHP_EOL;

$total = 0;

function isMultipleOfThree($number) {
    if ($number % 3 == 0)
        return true;
}

function isMultipleOfFive($number) {
    if ($number % 5 == 0)
        return true;
}


for($i=1; $i<1000; $i++) {
    if (isMultipleOfThree($i) || isMultipleOfFive($i))
        $total += $i;
}

echo $total . PHP_EOL;
