<?php
require_once 'Kav/Tasks/Task0.php';
use \Kav\Tasks\Task0;

if (1 == 1) {
    echo 'hi';
}

// дополнительные тесты
echo '<pre>';
var_dump(Task0::TEST_CONSTANTA);
echo '</pre>';
echo '<pre>';
var_dump(Task0::$userName);
echo '</pre>';
echo Task0::showSomething();