<?php
require_once 'src/functions.php';

echo 'Задание 1:<br>';
$strings = ['бу', 'ра', 'ти', 'но'];
task1($strings);
echo task1($strings, true);

echo '<hr>Задание 2:<br>';
task2('+', 2, 3, 5);
echo '<br>';
task2('-', 2, 3, 5);
echo '<br>';
task2('*', 2, 3, 5);
echo '<br>';
task2('/', 2, 3, 5);
echo '<br>';
task2('%', 2, 3, 5);
echo '<br>';
task2('+');

echo '<hr>Задание 3:<br>';
task3(3, 3);
echo '<br>';
task3(2, 5);
echo '<br>';
task3(-3, 3);
echo '<br>';
task3(3, 3.2);