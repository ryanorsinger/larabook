<?php

// By considering the terms in the Fibonacci sequence whose values do not exceed four million,
// Find the sum of the even-valued terms.
// 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...

$new_number = 0;
$last = 1;
$next_to_last = 0;
$total = 0;

function makeNewNumber($last, $next_to_last)
{
    $new_number = $last + $next_to_last;
    return $new_number;
}

function assignLastToNextToLast($last)
{
    $next_to_last = $last;
    return $next_to_last;
}

function assignNewNumberToLast($new_number)
{
    $last = $new_number;
    return $last;
}


while($new_number < 4000000) {

    $new_number = makeNewNumber($last, $next_to_last);

    $next_to_last = assignLastToNextToLast($last);

    $last = assignNewNumberToLast($new_number);

    if ($new_number % 2 == 0)
        $total += $new_number;
}

echo PHP_EOL . $total . PHP_EOL;
