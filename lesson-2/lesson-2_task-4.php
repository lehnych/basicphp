<?php

function mathOperation($arg1,$arg2,$operation)
{
    switch ($operation) {
        case '+':
            return $arg1 + $arg2;
            break;

        case '-':
            return $arg1 - $arg2;
            break;

        case '*':
            return $arg1 * $arg2;
            break;

        case '/':
            return $arg1 / $arg2;
            break;

        default:
            return "Такая операция невозможна!";
    }
}

echo mathOperation(12,3,'*');

?>
