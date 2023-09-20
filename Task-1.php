<?php


function printEvenNumbers($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}
//using for loop...
// Call the function to print even numbers from 1 to 20 with a step of 2
printEvenNumbers(2, 20, 2);


function printEvenNumbersWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 === 0) {
            echo $i . " ";
        }
        $i += $step;
    }
}



printEvenNumbersWhile(2,20,2);


//using do while loop....




function printEvenNumbersWithDoWhileLoop($start, $end, $step) {
    do {
        if ($start % 2 == 0) {
            echo $start . " ";
        }
        $start += $step;
    } while ($start <= $end);
}

// Call the function to print even numbers from 1 to 20 with a step of 2
printEvenNumbersWithDoWhileLoop(2, 20, 2);