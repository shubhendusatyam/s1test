<?php

function printNumber($n) {
    $value = [
        '-' => $n,
        '1-' => 'Linio',
        '-1' => 'IT',
        '1-1' => 'Linianos'
    ];

    if (100 >= $n) {
        //echo $n."->".multiThree($n).'-'.multiFive($n); echo PHP_EOL;
        echo $n . "->" . $value[multiThree($n) . '-' . multiFive($n)];
        echo PHP_EOL;
        printNumber($n + 1);
    }
}

function multiThree($n) {
    return $n % 3 == 0;
}

function multiFive($n) {
    return $n % 5 == 0;
}

printNumber(1);

?>
