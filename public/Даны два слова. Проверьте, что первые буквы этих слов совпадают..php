<?php

$a = 'Привет';
$b = 'Погода';

if(mb_substr($a, 0, 1, 'utf-8') == mb_substr($b, 0, 1, 'utf-8')) {
    echo "Совпадает";
} else {
    echo "Не совпадает";
}