<?php

function sum ($a, $b) {
    return $a + $b;
}

function dif ($a, $b) {
    return $a - $b;
}

function mult ($a, $b) {
    return $a * $b;
}

function div ($a, $b) {
    return ($b != 0) ? $a / $b : 'divide by 0';
}

echo 'Сумма чисел: ' .sum(5,10).'<br>';
echo 'Разность чисел: ' .dif(20,2).'<br>';
echo 'Произведение чисел: ' .mult(8,7).'<br>';
echo 'Деление чисел: ' .div(6,2).'<br>';

?>
