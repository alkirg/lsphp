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
echo '<br>';
task2('+', 2);

echo '<hr>Задание 3:<br>';
task3(3, 3);
echo '<br>';
task3(2, 5);
echo '<br>';
task3(-3, 3);
echo '<br>';
task3(3, 3.2);
echo '<br>';
task3(3, '3');

echo '<hr>Задание 4:<br>';
task4();

echo '<hr>Задание 5:<br>';
echo task5('К', '', 'Карл у Клары украл Кораллы') . '<br>';
echo task5('Две', 'Три', 'Две бутылки лимонада') . '<br>';

echo '<hr>Задание 6:<br>';
echo 'Запись в файл test.txt<br>';
task61();
echo 'Содержимое файла test.txt<br>';
task62('test.txt');
echo '<br><br>Содержимое файла test1.txt<br>';
task62('test1.txt'); // несуществующий файл