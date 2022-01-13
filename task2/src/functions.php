<?php
function task1(array $strings, bool $implode = false)
{
    if ($implode) {
        return implode($strings);
    }
    foreach ($strings as $string) {
        echo '<p>' . $string . '</p>' . PHP_EOL;
    }
}