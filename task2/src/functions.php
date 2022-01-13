<?php
const ERR_NUMBERS = 'Введите числа';
const ERR_OPERATION = 'Операция не поддерживается';
const ERR_NEGATIVE = 'Числа должны быть больше ноля';
const ERR_INTEGER = 'Числа должны быть целыми';

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

function task3(int $first, int $second)
{
    if ($first <= 0 || $second <= 0) {
        echo ERR_NEGATIVE;
        return;
    }
    ?>
    <style>
        table { border-collapse: collapse; border-right: 1px solid black; }
        td { border-left: 1px solid black; padding: 5px; }
    </style>
    <table>
        <?php for ($i = 1; $i <= $first; $i++) {?>
            <tr>
                <?php for ($j = 1; $j <= $second; $j++) {?>
                <td><?php echo $j?> &#10060; <?php echo $i?> = <?php echo $j * $i?></td>
                <?php }?>
            </tr>
        <?php }?>
    </table>
<?php
}