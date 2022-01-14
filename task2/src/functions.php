<?php
const ERR_NUMBERS = 'Введите числа';
const ERR_OPERATION = 'Операция не поддерживается';
const ERR_NEGATIVE = 'Числа должны быть больше ноля';
const ERR_INTEGER = 'Числа должны быть целыми';
const ERR_FILE_OPEN = 'Невозможно открыть файл';
const ERR_FILE_WRITE = 'Файл недоступен для записи';

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

function task3($first, $second)
{
    if (!is_int($first) || !is_int($second)) {
        echo ERR_INTEGER;
        return;
    }
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

function task4()
{
    echo date('d.m.Y H:i') . '<br>';
    echo strtotime('24.02.2016 00:00:00') . '<br>';
}

function task5(string $search, string $replace, string $string): string
{
    return str_replace($search, $replace, $string);
}

function task61(): bool
{
    $file = fopen('test.txt', 'a');
    if (!$file) {
        echo ERR_FILE_OPEN;
        return false;
    }
    if (!is_writable('test.txt')) {
        echo ERR_FILE_WRITE;
        return false;
    }
    fwrite($file, 'Hello again!' . PHP_EOL);
    fclose($file);
    return true;
}

function task62(string $filename): bool
{
    if (!file_exists($filename)) {
        echo ERR_FILE_OPEN;
        return false;
    }
    $file = file_get_contents($filename);
    if (!$file) {
        echo ERR_FILE_OPEN;
        return false;
    }
    echo $file;
    return true;
}