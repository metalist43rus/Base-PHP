<?php
$a = 12;
$b = 13;
$digits = ltrim((string)$a, '-');
$digits2 = ltrim((string)$b, '-');

if($digits[0] == $digits2[0]) {
    echo "Совпадают";
} else {
    echo "Не совпадают";
}