<?php
const ERR_NUMBERS = 'Введите числа';
const ERR_OPERATION = 'Операция не поддерживается';

function task1(array $strings, bool $implode = false)
{
    if ($implode) {
        return implode($strings);
    }
    foreach ($strings as $string) {
        echo '<p>' . $string . '</p>' . PHP_EOL;
    }
}

function task2(string $operation, float ...$numbers)
{
    if (count($numbers) == 0) {
        echo ERR_NUMBERS;
        return;
    }
    $result = $numbers[0];
    switch ($operation) {
        case '+':
            $resultString = $numbers[0] . ' + ';
            for ($i = 1; $i < count($numbers); $i++) {
                $result += $numbers[$i];
                $resultString .= $numbers[$i] . ' + ';
            }
            break;
        case '-':
            $resultString = $numbers[0] . ' − ';
            for ($i = 1; $i < count($numbers); $i++) {
                $result -= $numbers[$i];
                $resultString .= $numbers[$i] . ' − ';
            }
            break;
        case '*':
            $resultString = $numbers[0] . ' ❌ ';
            for ($i = 1; $i < count($numbers); $i++) {
                $result *= $numbers[$i];
                $resultString .= $numbers[$i] . ' ❌ ';
            }
            break;
        case '/':
            $resultString = $numbers[0] . ' : ';
            for ($i = 1; $i < count($numbers); $i++) {
                $result /= $numbers[$i];
                $resultString .= $numbers[$i] . ' : ';
            }
            break;
        default:
            echo ERR_OPERATION;
            return;
    }
    echo mb_substr($resultString, 0, -2) . ' = ' . $result;
}