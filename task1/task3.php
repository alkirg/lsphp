<?php
const MAX_YOUTH_AGE = 17;
const MIN_ADULT_AGE = 18;
const MIN_PENSION_AGE = 65;
$age = 34;

if ($age >= 1 && $age <= MAX_YOUTH_AGE) {
    echo 'Вам ещё рано работать';
} elseif ($age >= MIN_ADULT_AGE && $age <= MIN_PENSION_AGE) {
    echo 'Вам еще работать и работать';
} elseif ($age > MIN_PENSION_AGE) {
    echo 'Вам пора на пенсию';
} else {
    echo 'Неизвестный возраст';
}
